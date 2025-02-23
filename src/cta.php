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
                            が<span class="f-m">代行します！</span></p>
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

</div>