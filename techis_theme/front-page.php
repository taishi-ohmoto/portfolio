<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
</head>

<body>
    <header>
        <!--インナー-->
        <div class="header__inner">
            <!--ロゴ画像-->
            <a href="<?php bloginfo('url'); ?>">
                <img class="header__logo" src="<?php bloginfo('template_url'); ?>/img/logo.png">
            </a>
            <!--ナビ欄-->
            <div id="nav" class="header__navgroup">
                <!--ナビ-->
                <div class="header__navitem"><a href="<?php bloginfo('url'); ?>#about">About</a></div>
                <div class="header__navitem"><a href="<?php bloginfo('url'); ?>#service">Service</a></div>
                <div class="header__navitem"><a href="<?php bloginfo('url'); ?>#news">News</a></div>
                <div class="header__navitem header__contact"><i class="fas fa-file-signature"></i>Contact<a class="a__btn" href="<?php bloginfo('url'); ?>/contact"></a></div>
            </div>
            <!--モーダル-->
            <div id="hamburger__modal" class="hamburger__modal"></div>
            <!--ハンバーガーメニューボタン-->
            <div id="hamburger__btn" class="hamburger__btn"><i class="fas fa-bars"></i></div>
        </div>
        <script>
            var lastInnerWidth = document.documentElement.clientWidth; //window.innerWidthで現在の画面幅を取得
            var nav = document.getElementById('nav');
            if (lastInnerWidth <= 480) { // 画面幅480px以下の場合
                nav.classList.add('hamburger'); // クラス「hamburger」を追加
            }
            // 横幅が変わったとき実行される関数
            window.addEventListener("resize", function() {
                // 現在と前回の横幅が違う場合だけ実行
                if (lastInnerWidth != document.documentElement.clientWidth) {
                    // 横幅を記録しておく
                    lastInnerWidth = document.documentElement.clientWidth;
                    if (lastInnerWidth <= 480) { // 画面幅480px以下の場合
                        if (!(nav.classList.contains('hamburger'))) { //クラス「hamburger」がない場合
                            nav.classList.add('hamburger'); // クラス「hamburger」を追加
                        }
                    } else { // 画面幅481px以上の場合
                        nav.classList.remove('hamburger'); //クラス「hamburger」を削除
                    }
                }
            });

            //ハンバーガーメニューボタンをクリックしたときに実行される関数
            document.getElementById('hamburger__btn').addEventListener('click', function() {
                //ナビ一覧とモーダルを表示
                nav.style.display = "block";
                document.getElementById('hamburger__modal').style.display = "block";
            });
            //ハンバーガーメニューが表示されてるときに、モーダルがクリックされると実行される関数
            document.getElementById('hamburger__modal').addEventListener('click', function() {
                //ナビ一覧とモーダルを非表示
                nav.style.display = "none";
                document.getElementById('hamburger__modal').style.display = "none";
            });
        </script>
    </header>
    <div class="main">

<!--------------------------
トップページのファーストビュー
---------------------------->
<div class="topimg">
    <img src="<?php bloginfo('template_url'); ?>/img/top1.png" alt="">
    <div id="toptext" class="toptext">どこにいても、<span class="br__sp">生まれても、</span><span class="br__pc">世界最高の教育を受けられる。</span></div>
</div>

<!--------------------------
Aboutブロック
---------------------------->
<div id="about" class="about content__items">
    <!--コンテンツのインナー-->
    <div class="content__inner">
        <!--コンテンツのタイトルエリア-->
        <div class="content__header">
            <div class="content__header__inner">
                <!--コンテンツのタイトル名-->
                About
                <!--下線-->
                <div class="content__header__border"></div>
            </div>
        </div>
        <!--コンテンツの内容-->
        <div class="about__content">
            <div class="about__img">
                <img src="<?php bloginfo('template_url'); ?>/img/about.png" alt="">
            </div>
            <div class="about__text">
                <div class="about__text__title">
                    プログラミングスクール<br>
                    テックアイエス
                </div>
                <div class="about__text__dis">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </div>
            </div>
        </div>
    </div>
</div>

<!--------------------------
Serviceブロック
---------------------------->
<div id="service" class="service content__items">
    <!--コンテンツのインナー-->
    <div class="content__inner">
        <!--コンテンツのタイトルエリア-->
        <div class="content__header">
            <div class="content__header__inner">
                <!--コンテンツのタイトル名-->
                Service
                <!--下線-->
                <div class="content__header__border"></div>
            </div>
        </div>
        <!--コンテンツの内容-->
        <div class="service__content">
            <!--Serviceのカード-->
            <div class="service__card">
                <!--カードの画像-->
                <div class="service__card__img">
                    <img src="<?php bloginfo('template_url'); ?>/img/service1.png" alt="">
                </div>
                <!--カードのタイトル-->
                <div class="service__card__title">
                    現役エンジニア講師
                </div>
                <!--カードの説明文-->
                <div class="service__card__dis">
                    ここにテキストが入りますここにテキストが入ります
                    ここにテキストが入りますここにテキストが入ります
                    ここにテキストが入りますここにテキストが入ります
                    ここにテキストが入りますここにテキストが入ります
                </div>
            </div>
            <!--Serviceのカード-->
            <div class="service__card">
                <!--カードの画像-->
                <div class="service__card__img">
                    <img src="<?php bloginfo('template_url'); ?>/img/service2.png" alt="">
                </div>
                <!--カードのタイトル-->
                <div class="service__card__title">
                    5分以内の質問対応
                </div>
                <!--カードの説明文-->
                <div class="service__card__dis">
                    ここにテキストが入りますここにテキストが入ります
                    ここにテキストが入りますここにテキストが入ります
                    ここにテキストが入りますここにテキストが入ります
                    ここにテキストが入りますここにテキストが入ります
                </div>
            </div>
            <!--Serviceのカード-->
            <div class="service__card">
                <!--カードの画像-->
                <div class="service__card__img">
                    <img src="<?php bloginfo('template_url'); ?>/img/service3.png" alt="">
                </div>
                <!--カードのタイトル-->
                <div class="service__card__title">
                    クラス制度・イベント
                </div>
                <!--カードの説明文-->
                <div class="service__card__dis">
                    ここにテキストが入りますここにテキストが入ります
                    ここにテキストが入りますここにテキストが入ります
                    ここにテキストが入りますここにテキストが入ります
                    ここにテキストが入りますここにテキストが入ります
                </div>
            </div>
        </div>
    </div>
</div>

<!--------------------------
Newsブロック
---------------------------->
<div id="news" class="news content__items">
    <!--コンテンツのインナー-->
    <div class="content__inner">
        <!--コンテンツのタイトルエリア-->
        <div class="content__header">
            <div class="content__header__inner">
                <!--コンテンツのタイトル名-->
                News
                <!--下線-->
                <div class="content__header__border"></div>
            </div>
        </div>
        <!--コンテンツの内容-->
        <div class="news__content">
            <!--表示件数を設定-->
            <?php
            // 指定したカテゴリーの ID を取得
            $category_id = get_cat_ID('News');
            // このカテゴリーの URL を取得(ニュース一覧はこちら用のリンク)
            $category_link = get_category_link($category_id);
            // 指定した記事のみ取得
            query_posts([
                'posts_per_page' => 3,
                'cat' => $category_id,
            ]);
            ?>
            <?php
            if (have_posts()) : //記事があるか判定
                while (have_posts()) : //記事一覧を取得するループを開始
                    the_post(); //ループ中、次の記事に進みます
            ?>
                    <a href="<?php the_permalink(); ?>">
                        <!--1記事-->
                        <div class="news__items">
                            <!--記事の投稿日-->
                            <div class="news__item news__date">
                                <?php echo get_the_date('Y.m.d'); ?>
                            </div>
                            <!--記事のタイトル-->
                            <div class="news__item news__title">
                                <?php the_title(); ?>
                            </div>
                            <!--デザイン右の矢印-->
                            <div class="news__item news__anchor">
                                →
                            </div>
                        </div>
                    </a>
            <?php
                endwhile;
            endif;
            ?>
            <div class="news__button">
                ニュース一覧はこちら
                <a href="<?php echo esc_url($category_link); ?>" class="a__btn"></a>
            </div>
        </div>
    </div>
</div>

<!--------------------------
Contactブロック
---------------------------->
<div id="contact" class="contact content__items">
    <!--コンテンツのインナー-->
    <div class="content__inner">
        <!--コンテンツのタイトルエリア-->
        <div class="content__header">
            <div class="content__header__inner">
                <!--コンテンツのタイトル名-->
                Contact
                <!--下線-->
                <div class="content__header__border"></div>
            </div>
        </div>
        <!--コンテンツの内容-->
        <div class="contact__content">
            <div class="contact__text">
                まずはお気軽に<br>
                無料で体験&カウンセリング
            </div>
            <div class="contect__button">
                申し込みはこちらから
                <a href="<?php bloginfo('url'); ?>/contact" class="a__btn">
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>