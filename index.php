<?php
// 各ページ固有のSEO設定
$page_title = "ProNavi｜仲間と一緒に成長できるコーチング型プログラミング学習";
$page_description = "学ぶだけで終わらせない。コーチング型×コミュニティで実装と案件獲得まで伴走。現役エンジニアの継続サポートで確実にスキル定着へ。";

get_header();
?>


<div class="video-bg">
    <video src="<?php echo get_template_directory_uri(); ?>/img/leaf_bg_landscape.mp4" autoplay muted loop
        playsinline></video>
</div>

<main>
    <div class="fv">
        <div class="pc-only">
            <video autoplay muted loop playsinline class="pc-only">
                <source src="<?php echo get_template_directory_uri(); ?>/img/Hackathon-FV03-PC_ver2.mp4"
                    type="video/mp4" />
            </video>
        </div>
        <div class="tb-only">
            <video autoplay muted loop playsinline class="tb-only">
                <source src="<?php echo get_template_directory_uri(); ?>/img/Hackathon-FV03-SP_ver2.mp4"
                    type="video/mp4" />
            </video>
        </div>
        <p class="titles">
            <span class="title">じぶんらしく働く、</span>
            <span class="title"><span class="yellow">"未来"</span>をつくろう</span>
        </p>
        <div class="link">
            <a href="https://line.me/R/ti/p/@939dwake" class="line" target="_blank">無料LINE相談</a>
        </div>
    </div>

    <section class="purpose">
        <div class="scroll-divider">
            <div class="scroll-text">ProNavi ProNavi ProNavi ProNavi</div>
        </div>

        <div class="wrapper">
            <h3 class="section-title">
                あなたの目的は？<br /><span>Purpose</span>
            </h3>

            <div class="inner">
                <ul class="purpose-list">
                    <li>
                        <a href="#comparison">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/purpose-1.png" alt="purpose" />
                            <h3 class="box-title">
                                他社との比較<span class="en">Comparison</span>
                            </h3>
                            <div class="arrow"></div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/purpose-2.png" alt="purpose" />
                            <h3 class="box-title">
                                どんなスクール？<span class="en">School</span>
                            </h3>
                            <div class="arrow"></div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>#about">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/purpose-3.png" alt="purpose" />
                            <h3 class="box-title">
                                案件獲得できる？<span class="en">Lead</span>
                            </h3>
                            <div class="arrow"></div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/voice/')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/purpose-4.png" alt="purpose" />
                            <h3 class="box-title">
                                未経験でも大丈夫？<span class="en">Unexperienced</span>
                            </h3>
                            <div class="arrow"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="before-after">
        <div class="wrapper">
            <h4 class="message">
                ProNaviで多くの受講生が、<br /><span class="fadein">“実践的な”</span>プログラミングスキル<br />を身につけています。
            </h4>

            <ul class="list">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/before-after-1.webp" alt="before-after1"
                        class="fadein" />
                    <div class="text-right">
                        <p class="middle left">
                            <span class="label fadein">before</span>
                            <span class="text fadein">独学で挫折</span>
                        </p>
                        <p class="middle right">
                            <span class="label fadein">after</span>
                            <span class="text fadein">5ヶ月で初案件獲得</span>
                        </p>
                        <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow1.png"
                                alt="arrow" /></div>
                        <p class="small">ちえさん｜30歳｜専業主婦</p>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/before-after-2.webp" alt="before-after2"
                        class="fadein" />
                    <div class="text-right">
                        <p class="middle left">
                            <span class="label fadein">before</span>
                            <span class="text fadein">スキルに不安</span>
                        </p>
                        <p class="middle right">
                            <span class="label fadein">after</span>
                            <span class="text fadein">自分の制作で喜ばれるように</span>
                        </p>
                        <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow1.png"
                                alt="arrow" /></div>
                        <p class="small">みきさん｜20歳｜会社員</p>
                    </div>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/before-after-3.JPG" alt="before-after3"
                        class="fadein" />
                    <div class="text-right">
                        <p class="middle left">
                            <span class="label fadein">before</span>
                            <span class="text fadein">仕事と両立できない</span>
                        </p>
                        <p class="middle right">
                            <span class="label fadein">after</span>
                            <span class="text fadein">毎月安定して収入に</span>
                        </p>
                        <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow1.png"
                                alt="arrow" /></div>
                        <p class="small">たくやさん｜30歳｜会社員</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="reason">
        <div class="wrapper">
            <h2 class="section-title">
                プロナビが選ばれる理由<span>reason</span>
            </h2>
            <p class="text">
                あなた専属のコーチが毎日伴走。<br />性格診断でマッチング「どこでつまずいているか」「次に何をすべきか」を一緒に整理しながら、<br />一人ひとりのペースで確実に前進できるよう伴走します。
            </p>

            <div class="inner">
                <ul class="list">
                    <li class="item">
                        <div class="left">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reason-1.png" alt="reason1"
                                class="fadein" />
                        </div>
                        <div class="right">
                            <h3 class="box-title fadein">コーチング型個別指導</h3>
                            <p class="fadein">
                                あなた専属のコーチが毎日伴走。性格診断でマッチング<br />「どこでつまずいているか」「次に何をすべきか」を一緒に整理しながら、一人ひとりのペースで確実に前進できるよう伴走します。
                            </p>
                        </div>
                    </li>

                    <li class="item">
                        <div class="left">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reason-2.png" alt="reason2"
                                class="fadein" />
                        </div>
                        <div class="right">
                            <h3 class="box-title fadein">24時間質問対応</h3>
                            <p class="fadein">
                                公式LINEでいつでも質問可能<br />「今すぐ聞きたい！」その気持ち、大切にします。深夜でも早朝でも、あなたの学習リズムに合わせて対応。
                            </p>
                        </div>
                    </li>

                    <li class="item">
                        <div class="left">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reason-3.png" alt="reason3"
                                class="fadein" />
                        </div>
                        <div class="right">
                            <h3 class="box-title fadein">案件獲得まで徹底サポート</h3>
                            <p class="fadein">
                                営業同行、実案件での質問対応まで<br />「スキルは身についた。でも営業が不安...」そんなあなたを、案件獲得の瞬間まで完全サポート。
                            </p>
                        </div>
                    </li>

                    <li class="item">
                        <div class="left">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reason-4.png" alt="reason4"
                                class="fadein" />
                        </div>
                        <div class="right">
                            <h3 class="box-title fadein">実践重視のカリキュラム</h3>
                            <p class="fadein">
                                模写コーディングだけでなく、実際の案件を想定<br />「教材はできるけど、実案件は不安...」そのギャップを埋めるのが、私たちのカリキュラム。
                            </p>
                        </div>
                    </li>

                    <li class="item">
                        <div class="left">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reason-5.png" alt="reason5"
                                class="fadein" />
                        </div>
                        <div class="right">
                            <h3 class="box-title fadein">卒業後も安心のコミュニティ</h3>
                            <p class="fadein">
                                卒業生同士の交流、継続学習サポート<br />卒業は終わりじゃない。新しいスタート。仲間と切磋琢磨できる環境で、成長し続けられます。
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="flow" class="theme-section js-theme-section" data-theme="blue">
        <div class="wrapper">
            <h2 class="section-title">受講の流れ</h2>
            <span class="section-title-deco">flow</span>
            <p class="text-top">
                未経験から案件獲得までの道のり、最短6ヶ月のロードマップ
            </p>
        </div>
        <ul class="wrapper">
            <li class="step1">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_step1.png" alt="flow_step1" />
                    <p class="middle">LINE相談</p>
                </div>
                <p class="text">
                    あなたの目標をヒアリングし、最適な学習プランをご提案します。不安に思っていること、なんでもご相談ください。
                </p>
            </li>
            <li class="step2">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_step2.webp" alt="flow_step1" />
                    <p class="middle">講師決定</p>
                </div>
                <p class="text">
                    専属コーチが学習スケジュールを一緒に設計します。あなたの学習フェーズや授業を受けやすい時間、性格などを踏まえて、あなたにぴったりの講師を選別。
                </p>
            </li>
            <li class="step3">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_step3.png" alt="flow_step1" />
                    <p class="middle">授業</p>
                </div>
                <p class="text">
                    HTML・CSS・JavaScript・PHPを個別授業で学び、実践課題でスキルを磨きます。わからないことはLINEですぐに講師へ質問OK!
                </p>
            </li>
            <li class="step4">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_step4.png" alt="flow_step1" />
                    <p class="middle">サイト制作</p>
                </div>
                <p class="text">
                    学習の総まとめとしてオリジナルサイトを制作。講師のフィードバックを受けながら、完成度を高めていきます。
                </p>
            </li>
            <li class="step5">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_step5.webp" alt="flow_step1" />
                    <p class="middle">案件獲得サポート</p>
                </div>
                <p class="text">
                    クラウドソーシングでの提案文の添削や営業動向サポートで、初受注を徹底サポートします。さらに、受注後も案件でわからないことがあればアドバイスします。
                </p>
            </li>
        </ul>
        <div class="scroll-divider">
            <div class="scroll-text">ProNavi ProNavi ProNavi ProNavi ProNavi</div>
        </div>
    </section>

    <section id="teacher" class="theme-section js-theme-section" data-theme="blue">
        <div class="wrapper">
            <h2 class="section-title">講師プロフィール</h2>
            <span class="section-title-deco">teachers</span>
        </div>
        <ul class="teacher-grid wrapper">
            <li class="items">
                <img src="<?php echo get_template_directory_uri(); ?>/img/teacher_pic_tetsu.png" class="pic"
                    alt="teacher_pic1" />
                <span class="position">現役エンジニア講師</span>
                <p class="name">TETSU</p>
                <p class="words">
                    継続可能かつ着実にスキルをつけられる学習方法を一緒に探します。
                </p>
                <a href="" class="teacher_more_button" data-teacher="tetsu">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_underline_deco.png" class="underline"
                        alt="message_deco" />
                    <span>more</span>
                </a>
            </li>
            <li class="items">
                <img src="<?php echo get_template_directory_uri(); ?>/img/teacher_pic_yuriko.png" class="pic"
                    alt="teacher_pic2" />
                <span class="position">現役エンジニア講師</span>
                <p class="name">YURIKO</p>
                <p class="words">
                    未経験からでも一歩ずつ進める学習環境を一緒につくっていきましょう。
                </p>
                <a href="" class="teacher_more_button" data-teacher="yuriko">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_underline_deco.png" class="underline"
                        alt="message_deco" />
                    <span>more</span>
                </a>
            </li>
            <li class="items">
                <img src="<?php echo get_template_directory_uri(); ?>/img/teacher_pic_miya.png" class="pic"
                    alt="teacher_pic3" />
                <span class="position">現役エンジニア講師</span>
                <p class="name">MIYAGUCHI</p>
                <p class="words">
                    コードだけでなく、自分で考える力も育てる授業を心がけています。
                </p>
                <a href="" class="teacher_more_button" data-teacher="miya">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_underline_deco.png" class="underline"
                        alt="message_deco" />
                    <span>more</span>
                </a>
            </li>
            <li class="items">
                <img src="<?php echo get_template_directory_uri(); ?>/img/teacher_pic_atsuko.png" class="pic" alt="teacher_pic4" />
                <span class="position">現役エンジニア講師</span>
                <p class="name">ATSUKO</p>
                <p class="words">
                    現場で使える実装力と、最後までやり切る継続力の両方を大事にしています。
                </p>
                <a href="" class="teacher_more_button" data-teacher="atsuko">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_underline_deco.png" class="underline" alt="message_deco" />
                    <span>more</span>
                </a>
            </li>
        </ul>
    </section>

    <div id="teacher-modal" class="teacher-modal">
        <div class="teacher-modal-overlay"></div>
        <div class="teacher-modal-content">
            <button class="teacher-modal-close">&times;</button>
            <div class="teacher-modal-inner">
                <img src="" alt="teacher-modal-pic" class="teacher-modal-pic" />
                <div class="teacher-modal-info">
                    <span class="teacher-modal-position"></span>
                    <h3 class="teacher-modal-name"></h3>
                    <p class="teacher-modal-message"></p>
                </div>
            </div>
        </div>
    </div>

    <section id="works" class="flip-slider">
        <div class="wrapper">
            <h2 class="section-title">生徒の制作実績</h2>
            <span class="section-title-deco">works</span>
        </div>
        <div class="wrapper">
            <div class="flip-slider__inner js-flip-slider">
                <a href="https://pronavi-board.noe-p.com/%e7%be%8e%e5%ae%b9%e3%82%a8%e3%82%b9%e3%83%86%e3%82%b5%e3%83%ad%e3%83%b3%e3%81%aehp/"
                    target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/1-front.png"
                                alt="works1-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/1-back.png"
                                alt="works1-back" /></div>
                    </div>
                </a>
                <a href="https://pronavi-board.noe-p.com/quiet/ " target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/2-front.png"
                                alt="works2-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/2-back.png"
                                alt="works2-back" /></div>
                    </div>
                </a>
                <a href="https://pronavi-board.noe-p.com/trattoria-verde/" target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/3-front.png"
                                alt="works3-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/3-back.png"
                                alt="works3-back" /></div>
                    </div>
                </a>
                <a href="https://pronavi-board.noe-p.com/%e6%9d%b1%e4%ba%ac%e3%82%b5%e3%83%b3%e3%83%80%e3%83%bc%e3%82%b9ec%e3%82%b0%e3%83%83%e3%82%ba%e3%82%b5%e3%82%a4%e3%83%88/"
                    target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/4-front.png"
                                alt="works4-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/4-back.png"
                                alt="works4-back" /></div>
                    </div>
                </a>
                <a href="https://pronavi-board.noe-p.com/%e3%82%aa%e3%83%aa%e3%82%b8%e3%83%8a%e3%83%abbarber%e3%82%b5%e3%82%a4%e3%83%88/"
                    target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/5-front.png"
                                alt="works5-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/5-back.png"
                                alt="works5-back" /></div>
                    </div>
                </a>
                <a href="https://pronavi-board.noe-p.com/%e3%82%86%e3%81%99%e3%81%af%e3%82%89%e9%9b%b2%e3%81%ae%e4%b8%8a%e3%81%ae%e5%9b%b3%e6%9b%b8%e9%a4%a8lp/"
                    target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/6-front.png"
                                alt="works6-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/6-back.png"
                                alt="works6-back" /></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="wrapper viewmore">
            <a href="https://pronavi-board.noe-p.com/" target="_blank">View More ></a>
        </div>
    </section>

    <section id="comparison">
        <div class="wrapper">
            <h2 class="section-title">他スクールとの比較</h2>
            <span class="section-title-deco">comparison</span>
        </div>

        <div class="sp-icon wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top_swipetoright.png" alt="swipe_to_right">
            <span>スワイプして比較する</span>
        </div>

        <table class="compare-table wrapper">
            <thead>
                <tr>
                    <th></th>
                    <th class="pronavi">
                        <p class="school-name">ProNavi</p>
                    </th>
                    <th>
                        <p class="school-name">A社</p>
                    </th>
                    <th class="right">
                        <p class="school-name">B社</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">料金</th>
                    <td class="pronavi">55万円</td>
                    <td>17〜35万円<br /><span class="small">（コースにより変動）</span></td>
                    <td class="right">40〜80万円<br /><span class="small">（転職保証付きコース）</span></td>
                </tr>
                <tr>
                    <th scope="row">期間</th>
                    <td class="pronavi">６ヶ月</td>
                    <td>△<br /><span class="small">4〜12週間</span></td>
                    <td class="right">△<br /><span class="small">3〜6ヶ月</span></td>
                </tr>
                <tr>
                    <th scope="row">個別指導</th>
                    <td class="pronavi">〇<br /><span class="small">専属コーチ制</span></td>
                    <td>✕<br /><span class="small">チャット＋週2メンタリング</span></td>
                    <td class="right">〇<br /><span class="small">メンター複数制</span></td>
                </tr>
                <tr>
                    <th scope="row">質問対応</th>
                    <td class="pronavi">〇<br /><span class="small">24時間LINE対応</span></td>
                    <td>△<br /><span class="small">15〜23時のみ</span></td>
                    <td class="right">△<br /><span class="small">面談＋チャット制限あり</span></td>
                </tr>
                <tr>
                    <th scope="row">案件獲得支援</th>
                    <td class="pronavi">〇<br /><span class="small">営業同行・提案添削</span></td>
                    <td>△<br /><span class="small">案件紹介のみ</span></td>
                    <td class="right">✕<br /><span class="small">転職支援中心</span></td>
                </tr>
                <tr>
                    <th scope="row">卒業後サポート</th>
                    <td class="pronavi">〇<br /><span class="small">永久コミュニティ参加</span></td>
                    <td>△<br /><span class="small">受講期間中のみ</span></td>
                    <td class="right">✕<br /><span class="small">転職後サポートなし</span></td>
                </tr>
                <tr>
                    <th scope="row">返金保証</th>
                    <td class="pronavi">〇<br /><span class="small">あり（8日間）</span></td>
                    <td>△<br /><span class="small">一部コースのみ</span></td>
                    <td class="right">✕<br /><span class="small">転職保証付き</span></td>
                </tr>
            </tbody>
        </table>
        <div class="cooling-off wrapper">
            <div class="box-inner">
                <div class="flex">
                    <div class="text-box">
                        <p class="text sub">安心の返金保証</p>
                        <p class="middle label">Risk Free</p>
                        <p class="middle info">8<span>日間</span>無条件返金保証</p>
                    </div>
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top_riskfree.webp"
                            alt="cooling-off-pic" />
                    </div>
                </div>
                <p>
                    実際に初回授業を受けてからご判断いただけます。<br>
                    「思っていた雰囲気と違うかも」「今の自分には合わないかも」と感じた場合でも、
                    クーリングオフ期間中であれば、その時点で退会・返金をお申し出いただけます。<br>
                    はじめてのプログラミング学習でも、どうぞ安心して一歩を踏み出してください。
                </p>
                <small>※クーリングオフ期間内に初回授業を受講できるよう、日程調整を行いますが、スケジュールの都合により前後する場合がございます。
                    ※返金条件の詳細は、受講規約をご確認ください。</small>
            </div>
        </div>
    </section>

    <section id="faq">
        <div class="flex wrapper">
            <div class="flex-left">
                <h2 class="section-title">よくある質問</h2>
                <span class="section-title-deco">FAQ</span>
            </div>
            <div class="flex-right">
                <div class="faq-item">
                    <button class="faq-q js-faq-toggle">
                        <span class="faq-label">Q</span>
                        <p class="faq-question">他のスクールとの違いは何ですか？</p>
                    </button>
                    <div class="faq-a">
                        <span class="faq-label a-label">A</span>
                        <div class="faq-answer">
                            <p>
                                大きく3つあります。<br /><br />
                                ・専属コーチ制: あなた専属のコーチが毎日伴走<br />
                                ・案件獲得まで完全サポート: 営業同行・受注後のサポートまで<br />
                                ・卒業後も永久コミュニティ: 一生涯の学習仲間が得られる「スキルを教えて終わり」ではなく、「案件を獲得して稼げるようになるまで」が私たちのゴールです。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q js-faq-toggle">
                        <span class="faq-label">Q</span>
                        <p class="faq-question">本当に未経験でも大丈夫ですか？</p>
                    </button>
                    <div class="faq-a">
                        <span class="faq-label a-label">A</span>
                        <div class="faq-answer">
                            <p>
                                はい、大丈夫です。<br />受講生の多くが完全未経験からのスタートです。<br />「パソコンは苦手」という方でも、基礎の基礎から丁寧にサポートします。<br />まずは無料カウンセリングで、あなたのレベルに合った学習プランをご提案させてください。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q js-faq-toggle">
                        <span class="faq-label">Q</span>
                        <p class="faq-question">働きながらでも学習できますか？</p>
                    </button>
                    <div class="faq-a">
                        <span class="faq-label a-label">A</span>
                        <div class="faq-answer">
                            <p>
                                はい、できます。<br />受講生の多くが働きながらや、子育てと両立しながら学習しています。<br /><br />・学習時間の例：平日2時間、休日4〜5時間・忙しい時期は学習ペースを調整可能。<br />・空き時間に合わせて週１回の授業を予約できます。<br />・授業の24時間前まで日程変更可能なので、急な予定変更にも対応可能。<br /><br />あなたのライフスタイルに合わせた学習プランを一緒に考えます。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q js-faq-toggle">
                        <span class="faq-label">Q</span>
                        <p class="faq-question">どれくらいの期間で案件獲得できますか？</p>
                    </button>
                    <div class="faq-a">
                        <span class="faq-label a-label">A</span>
                        <div class="faq-answer">
                            <p>
                                平均6ヶ月で初案件獲得される方が多いです。<br /><br />ただし、学習時間や経験によって個人差があります。<br />最短３ヶ月〜平均６ヶ月での案件獲得を目指して一緒に学習サポートしていきまが、<br />焦らず、あなたのペースで確実にスキルを身につけることが大切です。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q js-faq-toggle">
                        <span class="faq-label">Q</span>
                        <p class="faq-question">どんな人が講師をしていますか？</p>
                    </button>
                    <div class="faq-a">
                        <span class="faq-label a-label">A</span>
                        <div class="faq-answer">
                            <p>
                                全員が「現役で稼いでいる」プロフェッショナルです。<br /><br />・現役フリーランスエンジニア<br />・アプリ開発を手掛ける講師<br />・ここで学んだ卒業生も講師として活躍<br />教科書的な知識だけでなく、現場の生きたノウハウをお伝えします。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>