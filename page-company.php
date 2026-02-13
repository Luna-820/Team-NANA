    <?php

    // ページ個別のSEO設定
    $page_title = "ProNavi｜会社概要";
    $page_description = "プログラミング学習から実装・案件獲得まで、現役エンジニアが伴走支援するコミュニティ。株式会社NOEの会社概要・メンバー紹介はこちら。";

    get_header();
    ?>

    <div class="video-bg">
        <video src="<?php echo get_template_directory_uri(); ?>/img/leaf_bg_landscape.mp4" autoplay muted loop playsinline></video>
    </div>

    <main>
        <section id="fv" class="wrapper">
            <span class="section-title__en">COMPANY</span>
            <h2 class="section-title flex-left fadein2">会社概要</h2>
        </section>

        <section id="message" class="wrapper">
            <div class="flex-left">
                <h3 class="section-title fadein">想い</h3>
                <span>message</span>
            </div>
            <div class="flex-right">
                <h4 class="message">
                    私たちは2023年の創業から現在に至るまで、常に「現場で価値を生み出す」を軸に数多くのプロジェクトに挑戦を続けてきました。
                </h4>
                <p class="text">設立以来、単なるサービス提供に留まらず、社会やお客様に長く貢献できる組織づくりを目指してきました。<br><br>
                    私たちが目指す未来は、「主体性ある人が集い、新しい価値を生み出す経済圏を創ること」です。個々の挑戦が連鎖し、社会にインパクトを与える循環型のコミュニティを築くことをビジョンとしています。<br><br>
                    このビジョンを共に実現できる仲間を私たちは求めています。同じ志を持ち、挑戦を楽しめる人たちと共に、経済圏を広げていきます。<br><br>
                    私たちが大切にしているのは、ただ事業を拡大することではなく、「共に学び、共に挑戦し、共に未来をつくる」という文化です。この思いを軸に、これからも挑戦し続ける人たちと共に歩んでいきます。
                </p>
            </div>
        </section>

        <section id="member" class="wrapper">
            <div class="flex-left">
                <h3 class="section-title fadein">運営メンバー</h3>
                <span>member</span>
            </div>
            <div class="flex-right">
                <ul>
                    <li class="items">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/member_pic_kato.png" class="pic" alt="member_pic">
                        <span class="position">講師統括</span>
                        <p class="name">加藤 夕騎</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company_underline_deco.png" class="underline" alt="message_deco">
                        <p class="words">お客様一人ひとりの目的や課題にあった組み合わせをカリキュラムとして提供します。</p>
                    </li>
                    <li class="items">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/member_pic_usui.png" class="pic" alt="member_pic">
                        <span class="position">カスタマーサポート</span>
                        <p class="name">USUI</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company_underline_deco.png" class="underline" alt="message_deco">
                        <p class="words">お客様の声に真摯に向き合います。迅速かつ的確な対応を心がけ、安心してご利用いただける環境を支えます。</p>
                    </li>
                    <li class="items">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/member_pic_sasaki.png" class="pic" alt="member_pic">
                        <span class="position">サポート統括</span>
                        <p class="name">SASAKI</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company_underline_deco.png" class="underline" alt="message_deco">
                        <p class="words">受講生が実務で使える開発環境と教材を整え、学習の土台づくりを担当しています。</p>
                    </li>
                </ul>
            </div>
        </section>

        <section id="sns" class="wrapper">
            <div class="flex-left">
                <h3 class="section-title fadein">SNS</h3>
                <span>social media</span>
            </div>
            <div class="flex-right">
                <ul>
                    <li>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/iruka_pic.png" alt="iruka_icon">
                        </div>
                        <div class="text">
                            <span>iruka.freelance</span>
                            <p class="text">いるか｜ワンランク上の仕事と日常</p>
                            <a href="https://www.instagram.com/iruka.freelance?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">アカウントを見る >>></a>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/kakashi_pic.png" alt="kakashi_icon">
                        </div>
                        <div class="text">
                            <span>kakashi.programming.lab</span>
                            <p class="text">かかし｜プログラミング×教育️</p>
                            <a href="https://www.instagram.com/kakashi.programming.lab?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">アカウントを見る >>></a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id="youtube" class="wrapper">
            <div class="flex-left">
                <h3 class="section-title fadein">Youtube</h3>
                <span>かかしチャンネル</span>
            </div>
            <div id="youtube-videos" class="video-list">
                <?php
                $channel_id = 'UC5uTMehOhlFGFgS4Bkpalrw';
                $rss_url = "https://www.youtube.com/feeds/videos.xml?channel_id={$channel_id}";

                // RSSを取得
                $rss = fetch_feed($rss_url);
                $max_videos = 3;
                $videos = array();

                if (!is_wp_error($rss)) :
                    // 最新から最大3件をそのまま取得
                    $items = $rss->get_items(0, $max_videos);
                    foreach ($items as $item) {
                        // 動画IDの抽出
                        $video_id = '';
                        $raw_id = $item->get_id();
                        if (strpos($raw_id, 'yt:video:') !== false) {
                            $video_id = str_replace('yt:video:', '', $raw_id);
                        }

                        if (!$video_id) continue;

                        $videos[] = array(
                            'url'       => "https://www.youtube.com/watch?v={$video_id}",
                            'title'     => $item->get_title(),
                            'date'      => $item->get_date('Y.m.d'),
                            'thumbnail' => "https://i.ytimg.com/vi/{$video_id}/mqdefault.jpg"
                        );
                    }
                endif;
                ?>

                <?php if (!empty($videos)) : ?>
                    <?php foreach ($videos as $video) : ?>
                        <div class="video-item">
                            <a href="<?php echo esc_url($video['url']); ?>" target="_blank" rel="noopener noreferrer">
                                <div class="video-thumbnail">
                                    <img src="<?php echo esc_url($video['thumbnail']); ?>" alt="<?php echo esc_attr($video['title']); ?>" loading="lazy">
                                    <div class="play-button">
                                        <svg width="68" height="48" viewBox="0 0 68 48">
                                            <path d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path>
                                            <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="video-info">
                                    <p class="video-date"><?php echo esc_html($video['date']); ?></p>
                                    <h3 class="video-title"><?php echo esc_html($video['title']); ?></h3>
                                    <span class="video-link">視聴する >>></span>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p class="no-videos">現在、表示できる動画がありません。</p>
                <?php endif; ?>
            </div>
        </section>

        <section id="media" class="wrapper">
            <div class="flex-left">
                <h3 class="section-title fadein">メディア掲載</h3>
                <span>media</span>
            </div>
            <div class="flex-right">
                <ul>
                    <li>
                        <div class="thumnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/media_thumnail.png" alt="media_thumnail">
                        </div>
                        <div class="info">
                            <p class="date">2025/02/24</p>
                            <p class="text">
                                TOKYO MX 情報バラエティ番組「ええじゃないか！！」
                            </p>
                            <a href="https://youtu.be/0Te2W50okgM?si=-7N1pFbvqI8cX_8o" target="_blank">視聴する >>></a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id="overview" class="wrapper">
            <div class="flex-left">
                <h3 class="section-title fadein">会社概要</h3>
                <span>overview</span>
            </div>
            <table class="company-table">
                <tr>
                    <th>会社名</th>
                    <td>株式会社NOE（NOE Co., Ltd.）</td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td>2023年1月26日</td>
                </tr>
                <tr>
                    <th>代表取締役</th>
                    <td>加藤　大騎</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>愛知県名古屋市中区丸の内3丁目15−22 丸の内Usビル801号室</td>
                </tr>
                <tr>
                    <th>問い合わせ</th>
                    <td><a href="https://navigator-of-engineering.com/contact/" target="_blank">https://navigator-of-engineering.com/contact/</a></td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>プログラミングスクール事業<br>システム・アプリ開発</td>
                </tr>
            </table>
        </section>
    </main>
    <?php get_footer(); ?>