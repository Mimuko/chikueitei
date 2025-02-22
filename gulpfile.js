//----------------------------------------------------------------------
//  モード
//----------------------------------------------------------------------

"use strict"; // 厳格モードを使用する

//----------------------------------------------------------------------
//  モジュール読み込み
//----------------------------------------------------------------------

const gulp = require("gulp"); // gulpを読み込む
const { src, dest, series, watch } = require("gulp"); // gulpのメソッドを読み込む

const plumber = require("gulp-plumber"); // エラーハンドリング用のプラグインを読み込む
const sassGlob = require("gulp-sass-glob-use-forward"); // Sassのglob機能を使うためのプラグインを読み込む
const sass = require('gulp-sass')(require('sass')); // Sassをコンパイルするためのプラグインを読み込む
const cached = require('gulp-cached'); // ファイルキャッシュ
const connectPhp = require('gulp-connect-php');
const browserSync = require('browser-sync').create(); // browser-syncを読み込む

//----------------------------------------------------------------------
//  関数定義
//----------------------------------------------------------------------

function compile(done) {
    src("src/scss/**/*.scss") // SCSSファイルをソースとして指定する
        .pipe(plumber()) // watch中にエラーが発生してもwatchが止まらないようにする
        .pipe(sassGlob()) // glob機能を使って@useや@forwardを省略する
        .pipe(sass()) // sassのコンパイルをする
        .pipe(cached('scss')) // ファイルをキャッシュ
        .pipe(dest("src/css/")); // コンパイル後のCSSファイルを出力する

    done(); // タスク完了を通知する
}

function watchFiles() {
    // SCSSファイルの変更を監視し、変更があればcompileタスクを実行し、ブラウザをリロードする
    watch("src/scss/**/*.scss", series(compile, function(done) {
        browserSync.reload(); // ブラウザをリロード
        done();
    }));

    // PHPファイルの変更を監視し、変更があればリロードする
    watch('src/index.php').on('change', function() {
        browserSync.reload(); // PHPファイルが変更されたときにブラウザをリロード
    });
}

//----------------------------------------------------------------------
//  タスク定義
//----------------------------------------------------------------------

exports.compile = series(compile); // compile関数をタスクとして定義する
exports.watchFiles = watchFiles; // watchFiles関数をタスクとして定義する

// タスク: PHPサーバーを起動する
gulp.task('server', function(done) {
    connectPhp.server({
        base: 'src', // PHPファイルのベースディレクトリ
        port: 8000, // PHPサーバーのポート
        keepalive: true
    }, function() {
        browserSync.init({
            proxy: '127.0.0.1:8000', // PHPサーバーのプロキシ設定
            open: 'http://127.0.0.1:8000/index.php', // ブラウザを自動的に開く際にindex.phpを指定
            port: 3000 // ブラウザシンクのポートを3000に設定
        });
    });
    done();
});

// デフォルトタスク
gulp.task('default', gulp.series('server', watchFiles));
/************************************************************************/
/*  END OF FILE                                                         */
/************************************************************************/