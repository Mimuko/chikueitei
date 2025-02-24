<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pages/wantedly.css">

</head>

<?php
$localPath = "img";
$wpPath = "[tp_dir]/img/wantedly";

$choice = 0; // 0または1を選択

// 0または1の場合の条件分岐
if ($choice === 0) {
    $selectedPath = $localPath; // $localPathを選択
} elseif ($choice === 1) {
    $selectedPath = $wpPath; // $wpPathを選択
} else {
    $selectedPath = null; // それ以外の場合はnull
}
?>

<body>
    <section class="wantedly_wrapper">
        <div class="bg-white">
            <section class="main-visual__wrap">
                <div class="main-visual">
                    <div class="main-visual__inr">
                        <div class="main-visual__inr__contents">
                            <div class="lead">
                                <p class="lead__text">月額制のサブスク型サービス</p>
                            </div>
                            <h1 class="main-visual__title">まるごと<span class="em">Wantedly運用代行</span></h1>
                            <ul class="point">
                                <li class="point__item">豊富なノウハウと実績をもとに魅力が伝わるアプローチ方法をご提案！</li>
                                <li class="point__item">オンラインで伴走しながら人事経験豊富なプロチームがサポートします！</li>
                            </ul>
                            <ul class="achive">
                                <li class="achive-item">
                                    <img src="<?php echo ($selectedPath); ?>/mv-achive-item01.webp" alt="ご支援実績604社！" loading="lazy">
                                </li>
                                <li class="achive-item">
                                    <img src="<?php echo ($selectedPath); ?>/mv-achive-item02.webp" alt="Wantedlyを活用した採用実績 1000名以上！" loading="lazy">
                                </li>
                                <li class="achive-item">
                                    <img src="<?php echo ($selectedPath); ?>/mv-achive-item03.webp" alt="Wantedly運用支援認定企業" loading="lazy">
                                </li>
                                <li class="achive-item">
                                    <img src="<?php echo ($selectedPath); ?>/mv-achive-item04.webp" alt="マルゴト株式会社はWantedlyのパートナー認定企業です" loading="lazy">
                                </li>
                            </ul>
                        </div>

                        <div class="main-visual__illust">
                            <div class="speech">
                                <p class="speech__text">
                                    <span class="f-l">Wantedly</span>
                                    の<span class="f-m">運用、</span><br>
                                    <span class="f-yellow f-l">採用のプロ</span>
                                    が<span class="f-m">代行します！</span>
                                </p>
                            </div>
                        </div>
                        <div class="wantedly-cta btn_wrap btn_wrap01">
                            <div class="box">
                                <div class="cta_btn_inner black_btn">
                                    <p>簡単3分で完了！</p>
                                    <a data-gtm-click="top_cta_btn-download" class="gtm_click" href="[tp_dir]/newgr/freedownload_newgr/">
                                        資料ダウンロードはこちら
                                    </a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="cta_btn_inner yellow_btn">
                                    <p>まずはお気軽に！</p>
                                    <a data-gtm-click="top_cta_btn-online" class="gtm_click" href="[tp_dir]/newgr/form_newgr/">
                                        オンライン相談はこちら
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <div class="scroll-infinity">
                <ul class="scroll-infinity__list scroll-infinity__list--left">
                    <li class="scroll-infinity__item">
                        <img loading="lazy" src="https://placehold.jp/200x80.png" alt="" />
                    </li>
                    <li class="scroll-infinity__item">
                        <img loading="lazy" src="https://placehold.jp/200x80.png" alt="" />
                    </li>
                    <li class="scroll-infinity__item">
                        <img loading="lazy" src="https://placehold.jp/200x80.png" alt="" />
                    </li>
                    <li class="scroll-infinity__item">
                        <img loading="lazy" src="https://placehold.jp/200x80.png" alt="" />
                    </li>
                </ul>
                <ul class="scroll-infinity__list scroll-infinity__list--left">
                    <li class="scroll-infinity__item">
                        <img loading="lazy" src="https://placehold.jp/200x80.png" alt="" />
                    </li>
                    <li class="scroll-infinity__item">
                        <img loading="lazy" src="https://placehold.jp/200x80.png" alt="" />
                    </li>
                    <li class="scroll-infinity__item">
                        <img loading="lazy" src="https://placehold.jp/200x80.png" alt="" />
                    </li>
                    <li class="scroll-infinity__item">
                        <img loading="lazy" src="https://placehold.jp/200x80.png" alt="" />
                    </li>
                </ul>
            </div>

        </div>

        
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~
      ~~~~~お悩みありませんかのセクション~~~~~
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="content arrow_icon outer-block wantedly-content--troubles">
            <div class="content-head content-head--troubles">
                <div class="content-head__inr">
                    <p class="catch_maintxt">TROUBLES</p>
                    <h2 class="title">Wantedlyの運用で<span class="title_dott_mark">こんなお悩み<br class="sp">ありませんか？</span></h2>
                </div>
            </div>
            <div class="content-body content-body--troubles inner-block">
                <div class="inner-block">
                    <div class="troubles_flame">
                        <li class="main-box troubles_flame__item">
                            <p class="desc">Wantedlyの<span class="em">自社運用に限界</span>を感じている</p>
                            <img class="troubles_img" src="<?php echo ($selectedPath); ?>/trouble_img01-min.webp" loading="lazy" width="350" height="201" alt="">
                        </li>

                        <div class="main-box troubles_flame__item">
                            <p class="desc">Wantedlyを活用した<br>採用戦略の<span class="em">ノウハウが足りない</span></p>
                            <img class="troubles_img" src="<?php echo ($selectedPath); ?>/trouble_img02-min.webp" loading="lazy" width="350" height="201" alt="">
                        </div>
                    </div>

                    <div class="troubles_flame">
                        <div class="main-box troubles_flame__item">
                            <p class="desc">Wantedlyで<span class="em">エンジニア採用に苦戦</span>している</p>
                            <img class="troubles_img" src="<?php echo ($selectedPath); ?>/trouble_img03-min.webp" loading="lazy" width="350" height="201" alt="">
                        </div>

                        <div class="main-box troubles_flame__item">
                            <p class="desc">Wantedlyで<span class="em">即戦力人材</span>を獲得したい</p>
                            <img class="troubles_img" src="<?php echo ($selectedPath); ?>/trouble_img04-min.webp" loading="lazy" width="350" height="201" alt="">
                        </div>

                        <div class="main-box troubles_flame__item">
                            <p class="desc">Wantedlyで自社の<span class="em">カルチャーに合った人材</span>を採用したい</p>
                            <img class="troubles_img" src="<?php echo ($selectedPath); ?>/trouble_img05-min.webp" loading="lazy" width="350" height="201" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~
      ~~~~~アンサーのセクション~~~~~
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="content outer-block wantedly-content--answer">
            <div class="content-head content-head--answer bg-circle">
                <div class="content-head__inr">
                    <p class="catch_maintxt">answer</p>
                    <h2 class="title">マルゴトの採用プロチームにおまかせで<span class="title_dott_mark">解決できます！</span></h2>
                </div>
            </div>
            <div class="inner-block">
                <div class="answer-flame main-box">
                    <div class="catch_subtxt">採用成功のカギは「採用のプロ視点」！</div>
                    <h2 class="title"><span class="colortxt title_em-circle">採用のプロチーム</span>にWantedly運用を<br class="sp">まるごとお任せ！</h2>
                    <div class="answer-solution_box">
                        <img class="answer-solution_img" src="<?php echo ($selectedPath); ?>/professional_img-min.webp" loading="lazy" width="652" height="325" alt="採用のプロチームによるWantedly運用代行のイメージ">
                        <div class="answer-solution_text">
                            <p class="desc">マルゴトなら、人事経験豊富な採用のプロチームが<br class="pc">人事の目線でWantedlyの運用をまるごと代行！<br>累計600社のご支援経験&amp;自社での運用経験から、<br class="pc">Wantedlyを活用した採用戦略のコツも熟知しています。<br>採用のプロが、丁寧なヒアリングから課題を洗い出し、<br class="pc">採用成功のために全力で伴走します！</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~
      ~~~~~高品質な理由のセクション~~~~~
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="content outer-block wantedly-content--reason">
            <div class="content-head content-head--reason">
                <div class="speech">
                    <p class="speech__text">どうして<br>できるのか？</p>
                </div>
                <div class="content-head__inr">
                    <p class="catch_maintxt">reason</p>
                    <h2 class="title"><span class="title_dott_mark">なぜ高品質なWantedly運用を<br class="sp">行えるのか？</span></h2>
                </div>
            </div>
            <div class="inner-block">
                <ul class="reason_flame">
                    <li class="main-box reason-item">
                        <div class="reason-item__head">理由</div>
                        <div class="reason-item__img">
                            <img src="<?php echo ($selectedPath); ?>/reason-img01.webp" alt="" loading="lazy" width="476" height="242">
                        </div>
                        <h3 class="reason-item__title">Wantedly運用の<br><span class="colormaker2">ご支援実績<span class="em">604</span>社</span>
                        </h3>
                        <div class="reason-item__body">
                            <p class="desc">あらゆる業種・職種の企業様へのご支援経験から、<br class="pc">採用ニーズに応じた細やかな採用計画の<br class="pc">立案・運用が可能です！</p>
                        </div>
                    </li>

                    <li class="main-box reason-item">
                        <div class="reason-item__head">理由</div>
                        <div class="reason-item__img">
                            <img src="<?php echo ($selectedPath); ?>/reason-img02.webp" alt="" loading="lazy" width="476" height="242">
                        </div>
                        <h3 class="reason-item__title">Wantedlyを活用した<br><span class="colormaker2">採用実績<span class="em">1000名</span>以上</span>
                        </h3>
                        <div class="reason-item__body">
                            <p class="desc">現在までにクライアントの採用ご支援と自社の採用の両面で、Wantedlyから<br class="pc">累計1000名以上の採用に成功！採用活動を成功に導く仕組みづくりはお任せください！
                            </p>
                        </div>
                    </li>

                    <li class="main-box reason-item">
                        <div class="reason-item__head">理由</div>
                        <div class="reason-item__img">
                            <img src="<?php echo ($selectedPath); ?>/reason-img03.webp" alt="" loading="lazy" width="476" height="242">
                        </div>
                        <h3 class="reason-item__title">Wantedlyを<br><span class="colormaker2"><span class="em">自社でも運用中</span></span>
                        </h3>
                        <div class="reason-item__body">
                            <p class="desc">自社採用でもWantedlyを活用しているから<br class="pc">運用や採用成功のコツを蓄積！<br>これらのノウハウを惜しみなくご提供します！
                            </p>
                        </div>
                    </li>
                </ul>

            </div>
        </section>

        <section class="content outer-block wantedly-content--details">
            <div class="inner-block">
                <div class="details-wrap">
                    <div class="content-head content-head--details">
                        <div class="speech">
                            <p class="speech__text">このような<br>サポートができます！</p>
                        </div>
                        <p class="catch_maintxt">details</p>
                        <h2 class="title"><span class="title_dott_mark">具体的に<br class="sp">ご支援できること</span></h2>
                        <p><span class="voice_line">ご支援範囲は以下の内容から<br class="sp">柔軟にカスタマイズ可能です！</span></p>
                    </div>
                    <ul class="detail-item__wrap">
                        <li class="detail-item">
                            <div class="detail-item__num">
                                <h3 class="detail-item__title">戦略立案</h3>
                            </div>
                            <div class="detail-item__img main-box">
                                <img src="<?php echo ($selectedPath); ?>/detail-img01-min.webp" alt="" loading="lazy" width="265" height="202">
                            </div>
                            <ul class="detail-item__list">
                                <li class="detail-item__list-item">採用ターゲットの設定</li>
                                <li class="detail-item__list-item">採用戦略の立案・設計</li>
                                <li class="detail-item__list-item">企業ミッションや価値観の言語化</li>
                                <li class="detail-item__list-item">採用ブランディングの確立</li>
                            </ul>
                        </li>
                        <li class="detail-item">
                            <div class="detail-item__num">
                                <h3 class="detail-item__title">会社ページ作成</h3>
                            </div>
                            <div class="detail-item__img main-box">
                                <img src="<?php echo ($selectedPath); ?>/detail-img02-min.webp" alt="" loading="lazy" width="265" height="202">
                            </div>
                            <ul class="detail-item__list">
                                <li class="detail-item__list-item">カバー画像の選定</li>
                                <li class="detail-item__list-item">ミッションの記載</li>
                                <li class="detail-item__list-item">価値観の明確化</li>
                                <li class="detail-item__list-item">メンバー紹介の作成支援</li>
                                <li class="detail-item__list-item">会社情報の整理</li>
                            </ul>
                        </li>
                        <li class="detail-item">
                            <div class="detail-item__num">
                                <h3 class="detail-item__title">募集記事の作成</h3>
                            </div>
                            <div class="detail-item__img main-box">
                                <img src="<?php echo ($selectedPath); ?>/detail-img03-min.webp" alt="" loading="lazy" width="265" height="202">
                            </div>
                            <ul class="detail-item__list">
                                <li class="detail-item__list-item">採用人材の明確化</li>
                                <li class="detail-item__list-item">採用要件の最適化</li>
                                <li class="detail-item__list-item">募集ページの設計／制作</li>
                                <li class="detail-item__list-item">魅力的なタイトルとカバー写真の選定</li>
                                <li class="detail-item__list-item">定期的な更新</li>
                            </ul>
                        </li>
                        <li class="detail-item">
                            <div class="detail-item__num">
                                <h3 class="detail-item__title">ストーリー記事の<br>作成サポート</h3>
                            </div>
                            <div class="detail-item__img main-box">
                                <img src="<?php echo ($selectedPath); ?>/detail-img04-min.webp" alt="" loading="lazy" width="265" height="202">
                            </div>
                            <ul class="detail-item__list">
                                <li class="detail-item__list-item">コンテンツの提案</li>
                                <li class="detail-item__list-item">記事のインタビュー案作成</li>
                                <li class="detail-item__list-item">投稿</li>
                            </ul>
                            <p class="desc note">※プロのライターによる記事作成が必要な場合は、<br class="pc">別サービスである採用広報サービスをご利用ください。</p>
                        </li>
                        <li class="detail-item">
                            <div class="detail-item__num">
                                <h3 class="detail-item__title">スカウトの実施</h3>
                            </div>
                            <div class="detail-item__img main-box">
                                <img src="<?php echo ($selectedPath); ?>/detail-img05-min.webp" alt="" loading="lazy" width="265" height="202">
                            </div>
                            <ul class="detail-item__list">
                                <li class="detail-item__list-item">候補者の検索と選定</li>
                                <li class="detail-item__list-item">スカウトメッセージの作成</li>
                                <li class="detail-item__list-item">返信率を高めるための工夫<br>(募集やストーリーとの連携)</li>
                            </ul>
                        </li>
                        <li class="detail-item">
                            <div class="detail-item__num">
                                <h3 class="detail-item__title">応募者管理と対応</h3>
                            </div>
                            <div class="detail-item__img main-box">
                                <img src="<?php echo ($selectedPath); ?>/detail-img06-min.webp" alt="" loading="lazy" width="265" height="202">
                            </div>
                            <ul class="detail-item__list">
                                <li class="detail-item__list-item">応募者への迅速な返信</li>
                                <li class="detail-item__list-item">面接日程の調整</li>
                                <li class="detail-item__list-item">応募者の進捗管理</li>
                            </ul>
                        </li>
                        <li class="detail-item">
                            <div class="detail-item__num">
                                <h3 class="detail-item__title">分析とレポーティング</h3>
                            </div>
                            <div class="detail-item__img main-box">
                                <img src="<?php echo ($selectedPath); ?>/detail-img07-min.webp" alt="" loading="lazy" width="265" height="202">
                            </div>
                            <ul class="detail-item__list">
                                <li class="detail-item__list-item">アナリティクス機能の活用</li>
                                <li class="detail-item__list-item">PV数、応募数の分析</li>
                                <li class="detail-item__list-item">PDCAサイクルの実施</li>
                            </ul>
                        </li>
                        <li class="detail-item">
                            <div class="detail-item__num">
                                <h3 class="detail-item__title">継続的な改善</h3>
                            </div>
                            <div class="detail-item__img main-box">
                                <img src="<?php echo ($selectedPath); ?>/detail-img08-min.webp" alt="" loading="lazy" width="265" height="202">
                            </div>
                            <ul class="detail-item__list">
                                <li class="detail-item__list-item">募集記事の更新</li>
                                <li class="detail-item__list-item">掲載写真の更新</li>
                                <li class="detail-item__list-item">会社ページの最新情報への更新</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~
      ~~~~~CTAのセクション~~~~~
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <?php include("cta.php"); ?>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~
      ~~~~~成功事例のセクション~~~~~
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="content outer-block wantedly-content--case">
            <div class="inner-block">
                <div class="content-head content-head--case">
                    <div class="bg-circle"></div>
                    <div class="speech">
                        <p class="speech__text">採用のプロ目線で<br>提案しました！</p>
                    </div>
                    <div class="content-head__inr">
                        <p class="catch_maintxt">Case</p>
                        <h2 class="title"><span class="title_min_txt">まるごとWantedly運用代行</span><span class="title_dott_mark">成功事例</span></h2>
                    </div>
                </div>

                <div class="case-item-wrap">
                    <div class="main-box case-item">
                        <div class="case-item_head">
                            <div class="case-item_head_mark"></div>
                            <h3 class="case-item_title">
                                <span class="case-item_title title_min_txt">【共感採用】を意識した企業ページ作りで</span>
                                <span class="f-yellow">カジュアル面談数が大幅UP</span>した事例
                            </h3>
                        </div>
                        <p class="desc">Wantedlyの特性である【共感採用】を意識し「ストーリー」機能を活用した採用広報に力を入れました。具体的には、社員インタビューや社内イベントの紹介などのコンテンツを充実させ、<span class="colormaker2">企業様の魅力が伝わるページ構成を強化</span>しました。その結果、<span class="colormaker2">カジュアル面談の機会を多数創出</span>することができました。</p>
                        <div class="case-item_body">
                            <div class="case-item_body_before">
                                <div class="case-item_body_title">
                                    <p>導入前</p>
                                </div>
                                <p class="desc">Wantedlyでの面談は<br>月に3件ほど・・・</p>
                            </div>
                            <div class="arrow_icon"></div>
                            <div class="case-item_body_after">
                                <div class="case-item_body_title">
                                    <p>導入後</p>
                                </div>
                                <p class="desc">面談回数が<br><span class="em"><span class="f-white">月10件以上</span>に急増！</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="main-box case-item">
                        <div class="case-item_head">
                            <div class="case-item_head_mark case-item_head_mark--blue"></div>
                            <h3 class="case-item_title">
                                <span class="case-item_title title_min_txt">掲載写真に課題があると仮定し変更による効果検証を実施。</span>
                                <span class="f-yellow">PV数・スカウト返信率が急増</span>した事例
                            </h3>
                        </div>
                        <p class="desc">まるごとWantedly運用代行の導入前は、企業ページにはロゴマークの画像を掲載していましたが、PV数や応募数は伸び悩んでおり、スカウトの返信率は0％。<span class="colormaker2">掲載画像をロゴから人物写真に差し替える提案を行い、検証した結果、PV数・応募数ともに大幅アップ！0%だったスカウト返信率は12.2％までに増加</span>しました！</p>
                        <div class="case-item_body">
                            <div class="case-item_body_before">
                                <div class="case-item_body_title">
                                    <p>導入前</p>
                                </div>
                                <p class="desc">月間PV数 636<br class="sp">応募数 22<br>スカウト返信率はなんと0％・・・</p>
                            </div>
                            <div class="arrow_icon"></div>
                            <div class="case-item_body_after">
                                <div class="case-item_body_title">
                                    <p>導入後</p>
                                </div>
                                <div class="case-item_body_inr">
                                    <dl class="date-box">
                                        <dt class="desc">月間PV数</dt>
                                        <dd class="desc f-white em">3909</dd>
                                    </dl>

                                    <dl class="date-box">
                                        <dt class="desc">応募数</dt>
                                        <dd class="desc f-white em">50</dd>
                                    </dl>

                                    <dl class="date-box">
                                        <dt class="desc">スカウト返信数</dt>
                                        <dd class="desc f-white em">12.2%</dd>
                                    </dl>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="main-box case-item">
                        <div class="case-item_head">
                            <div class="case-item_head_mark case-item_head_mark--orange"></div>
                            <h3 class="case-item_title">
                                <span class="case-item_title title_min_txt">Wantedlyの特性を活かした包括的な運用により</span> 念願の
                                <span class="f-yellow">デザイナー採用が決定</span>した事例
                            </h3>
                        </div>
                        <p class="desc">求人を出してもニーズに合った人材が集まらず、なかなか決定しなかったデザイナーを採用できたケース。<br> Wantedlyの特性を最大限に活かし、カジュアル面談をメインに訴求することを提案。
                            <span class="colormaker2">マッチ度の高いアクティブユーザーへのスカウト送付も積極的</span>に行いました。運用中は、<span class="colormaker2">スカウトのタイトルや文面のブラッシュアップを採用のプロ視点で行い</span>ながら、常に振り返りと改善を行いPDCAを回し、採用成功を実現しました。
                        </p>
                        <div class="case-item_body">
                            <div class="case-item_body_before">
                                <div class="case-item_body_title">
                                    <p>導入前</p>
                                </div>
                                <p class="desc">デザイナー職を募集しているが<br class="pc"> なかなか決まらない・・・
                                </p>
                            </div>
                            <div class="arrow_icon"></div>
                            <div class="case-item_body_after">
                                <div class="case-item_body_title">
                                    <p>導入後</p>
                                </div>
                                <p class="desc">ニーズにマッチしたスキルの<br class="pc"><span class="em f-white">デザイナー採用が決定！</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~
      ~~~~~導入の流れ~~~~~
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class=" content outer-block wantedly-content--flow">
            <div class="content-head content-head--flow">
                <div class="content-head__inr">
                    <div class="speech">
                        <p class="speech__text">最短10日で<br>ご支援開始できます！</p>
                    </div>
                    <p class="catch_maintxt">Schedule</p>
                    <h2 class="title"><span class="title_dott_mark">導入の流れ</span></h2>
                </div>
            </div>
            <div class="bg-white">
                <div class="arrow_icon inner-block">
                    <ol class="flow-item_wrap bg-white">
                        <li class="flow-item main-box">
                            <div class="flow-item_head">
                                <div class="flow-item_head_mark"></div>
                                <h3 class="flow-item_head_title">初回打ち合わせ</h3>
                            </div>

                            <div class="flow-item_body">
                                <p class="desc">オンラインで打ち合わせを行い、貴社の状況やニーズについて丁寧にヒアリングし、
                                    <span class="colormaker">業界や職種に合わせた最適な運用方法を提案します。</span>
                                </p>
                            </div>
                        </li>
                        <li class="flow-item main-box">
                            <div class="flow-item_head">
                                <div class="flow-item_head_mark"></div>
                                <h3 class="flow-item_head_title">契約締結</h3>
                            </div>

                            <div class="flow-item_body">
                                <p class="desc">
                                    提案内容や契約条件を詳しくご確認いただき、<span class="colormaker">双方が納得した上で契約を締結します。</span>ご不明点や不安などのご質問にもお答えします。</p>
                            </div>
                        </li>
                        <li class="flow-item main-box">
                            <div class="flow-item_head">
                                <div class="flow-item_head_mark"></div>
                                <h3 class="flow-item_head_title">キックオフMTG</h3>
                            </div>

                            <div class="flow-item_body">
                                <p class="desc">
                                    ご支援開始前に運用メンバーが、<span class="colormaker">プロジェクトの目的やゴールについて最終すり合わせを行い、足並みを揃える</span>ためのミーティングを行います。
                                </p>
                            </div>
                        </li>
                        <li class="flow-item main-box">
                            <div class="flow-item_head">
                                <div class="flow-item_head_mark"></div>
                                <h3 class="flow-item_head_title">運用スタート</h3>
                            </div>

                            <div class="flow-item_body">
                                <p class="desc">
                                    <span class="colormaker">最短10日でご支援スタート！</span><br class="sp">ニーズに合わせ、優先度の高い内容から運用開始！定期的な投稿と効果測定をしながらPDCAを回し、運用方法の改善も行います！
                                </p>
                            </div>
                        </li>
                    </ol>
                </div>
                <p><span class="voice_line">ご相談・お申し込みは<br class="sp">こちらからどうぞ！</span></p>

            </div>

        </section>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~
      ~~~~~CTAのセクション~~~~~
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <?php include("cta.php"); ?>

    </section>
</body>

</html>