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
<div class="bg-white">
    <section class="main-visual__wrap main-visual__wrap--cta">
        <div class="main-visual">
            <div class="main-visual__inr">
                <div class="main-visual__inr__contents">
                    <div class="lead">
                        <p class="lead__text">月額制のサブスク型サービス</p>
                    </div>
                    <h1 class="main-visual__title">まるごと<span class="em">Wantedly運用代行</span></h1>
                    <div class="achive">
                        <dl class="achive-item">
                            <dt class="achive-item__head"><span class="f-m">ご支援実績</span></dt>
                            <dd class="achive-item__body"><span class="f-ll">604</span>社!</dd>
                        </dl>
                        <dl class="achive-item">
                            <dt class="achive-item__head"><span class="f-ss">Wantedly<br>を活用した</span><span class="f-m">採用実績</span></dt>
                            <dd class="achive-item__body"><span class="f-ll">1000</span>名<br><span class="f-m">以上!</span></dd>
                        </dl>
                        <dl class="achive-item">
                            <dt class="achive-item__head"><span class="f-m">Wantedly<br>運用支援</span></dt>
                            <dd class="achive-item__body"><span>認定企業</span></dd>
                        </dl>
                        <div class="achive__img">
                            <img class="achive__img" src="<?php echo ($selectedPath); ?>/mv-wantedly-min.webp" alt="マルゴト株式会社はWantedlyパートナー認定企業です" loading="lazy" width="198" height="126">
                        </div>
                    </div>
                </div>

                <div class="main-visual__illust">
                    <div class="speech">
                        <p class="speech__text">
                            <span class="em">Wantedly</span>
                            <span>の</span>運用、<br>
                            <span class="f-yellow em">採用のプロ</span>
                            <span>が</span>代行します！</p>
                    </div>
                    <img src="<?php echo ($selectedPath); ?>/mv-people-min.webp" alt="人物イラスト" width="951" height="769" loading="lazy">
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

</div>