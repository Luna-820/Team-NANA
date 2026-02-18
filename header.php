<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php
    $default_title = "ProNavi｜仲間と一緒に成長できるコーチング型プログラミング学習";
    $default_desc = "学ぶだけで終わらせない。コーチング型×コミュニティで実装と案件獲得まで伴走。現役エンジニアの継続サポートで確実にスキル定着へ。";
    $current_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $theme_url = get_template_directory_uri();
    $home_url = esc_url(home_url('/'));
    ?>

    <title><?php echo isset($page_title) ? $page_title : $default_title; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : $default_desc; ?>" />

    <!-- OGP -->
    <meta property="og:site_name" content="ProNavi（プロナビ）" />
    <meta property="og:type" content="<?php echo is_front_page() ? 'website' : 'article'; ?>" />
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : $default_title; ?>" />
    <meta property="og:description"
        content="<?php echo isset($page_description) ? $page_description : $default_desc; ?>" />
    <meta property="og:url" content="<?php echo $current_url; ?>" />
    <meta property="og:image" content="<?php echo $theme_url; ?>/img/ogp-new.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:locale" content="ja_JP" />

    <!-- X(Twitter)カード -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : $default_title; ?>" />
    <meta name="twitter:description"
        content="<?php echo isset($page_description) ? $page_description : $default_desc; ?>" />
    <meta name="twitter:image" content="<?php echo $theme_url; ?>/img/ogp-new.png" />

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $current_url; ?>" />

    <!-- Favicon & App Icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $theme_url; ?>/img/favicon-new.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_url; ?>/img/favicon-new.png" />

    <!-- 構造化データ（Organization） -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "株式会社NOE",
            "url": "https://pronavi.navigator-of-engineering.com/",
            "description": "実装・制作・案件獲得まで継続伴走するコーチング型プログラミング学習を展開。",
            "email": "noe.co.0126@gmail.com",
            "address": {
                "@type": "PostalAddress",
                "addressRegion": "愛知県",
                "addressLocality": "名古屋市中区",
                "streetAddress": "丸の内3丁目15-22 丸の内Usビル801号室",
                "postalCode": "467-0002",
                "addressCountry": "JP"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer support",
                "email": "noe.co.0126@gmail.com",
                "availableLanguage": ["Japanese"]
            }
        }
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

 <!-- ローディング 「トップページのときだけ中身を出力する」ための条件分岐 -->
    <?php if (is_front_page()): ?>
        <div id="loading">
            <div class="loading-inner">
                <div class="logo fadein">
                    <div class="logo-flex">
                        <video autoplay loop muted playsinline width="500">
                            <source src="<?php echo get_template_directory_uri(); ?>/img/logo-loading.mp4" type="video/mp4">
                        </video>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pronavi-typoonly.png" alt="プロナビ"
                            class="pronavi">
                    </div>
                </div>
                <div class="loading-5">
                    <p>
                        <span>L</span>
                        <span>o</span>
                        <span>a</span>
                        <span>d</span>
                        <span>i</span>
                        <span>n</span>
                        <span>g</span>
                        <span>.</span>
                        <span>.</span>
                        <span>.</span>
                    </p>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <header>
        <h1>
            <a href="<?php echo $home_url; ?>"><img src="<?php echo $theme_url; ?>/img/logo.png" alt="ロゴ"
                    class="logo" /></a>
        </h1>

        <div class="menu-bg"></div>
        <nav class="hamburger-menu">
            <div class="company">
                <h2 class="active-logo">
                    <a href="<?php echo $home_url; ?>"><img src="<?php echo $theme_url; ?>/img/logo.png" alt="ロゴ" /></a>
                </h2>
                <p class="address">
                    〒460-0002<br />愛知県名古屋市中区丸の内3丁目15-22<br />丸の内Usビル801号室
                </p>
            </div>

            <div class="right">
                <ul class="menu">
                    <li>
                        <a href="<?php echo $home_url; ?>">
                            <span class="en">Top</span>
                            <span class="ja">トップページ</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>">
                            <span class="en">About</span>
                            <span class="ja">スクール詳細</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/voice/')); ?>">
                            <span class="en">Voice</span>
                            <span class="ja">受講生の声</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>#price">
                            <span class="en">Price</span>
                            <span class="ja">料金</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $home_url; ?>#faq">
                            <span class="en">FAQ</span>
                            <span class="ja">よくある質問</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/company/')); ?>">
                            <span class="en">Company</span>
                            <span class="ja">会社概要</span>
                        </a>
                    </li>
                </ul>

                <ul class="link">
                    <li>
                        <a href="https://line.me/R/ti/p/@939dwake" target="_blank">公式LINE</a>
                    </li>
                    <li>
                        <a href="https://pronavi-board.noe-p.com/" target="_blank">PortNavi <span>〜受講生の制作物〜</span></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/kakashi.programming.lab?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank"><img src="<?php echo $theme_url; ?>/img/instgram.png" class="ig" />かかし</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/iruka.freelance?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank"><img src="<?php echo $theme_url; ?>/img/instgram.png" class="ig" />いるか</a>
                    </li>
                    <li><a href="https://navigator-of-engineering.com/" target="_blank">運営会社</a></li>
                </ul>
            </div>
        </nav>

        <nav class="header-menu">
            <ul class="menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/about/')); ?>">
                        <span class="en">About</span>
                        <span class="ja">スクール詳細</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/voice/')); ?>">
                        <span class="en">Voice</span>
                        <span class="ja">受講生の声</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/about/')); ?>#price">
                        <span class="en">Price</span>
                        <span class="ja">料金</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $home_url; ?>#faq">
                        <span class="en">FAQ</span>
                        <span class="ja">よくある質問</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/company/')); ?>">
                        <span class="en">Company</span>
                        <span class="ja">会社概要</span>
                    </a>
                </li>
            </ul>

            <!-- 固定 -->
            <div class="fixed">
                <a href="https://line.me/R/ti/p/@939dwake" class="line" target="_blank">LINE相談</a>
                <div class="hamburger_fixed">
                    <div class="hamburger_toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <!--  -->
        </nav>
    </header>