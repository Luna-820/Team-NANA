<?php
// ページ個別のSEO設定
$page_title = "ProNavi｜会社概要";
$page_description = "プログラミング学習から実装・案件獲得まで、現役エンジニアが伴走支援するコミュニティ。プロナビの特徴や学習スケジュール、金額はこちら。";

get_header();
?>

<div class="video-bg">
<video src="<?php echo get_template_directory_uri(); ?>/img/leaf_bg_landscape.mp4" autoplay muted loop playsinline></video>
</div>

<main>
    <section id="fv" class="wrapper">
      <span class="section-title__en">SCHOOL</span>
      <h2 class="section-title flex-left fadein2">スクール詳細</h2>
    </section>

    <section id="moya" class="wrapper inner">
      <h3 class="box-title">こんな毎日にモヤモヤしていませんか?</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/img/about_moya.webp" alt="モヤモヤする女の子">
    </section>

    <section id="ideal" class="wrapper inner">
      <h3 class="box-title">稼げるプログラミングスキルを身につけると...</h3>
      <h3 class="box-title back-text  blue">そんなあなたの課題を実現できます！</h3>
      <ul>
        <li>
          <span><img src="<?php echo get_template_directory_uri(); ?>/img/about_check_icon.png" alt="check"></span>
          <p class="message">好きな場所・時間に働ける</p>
        </li>
        <li>
          <span><img src="<?php echo get_template_directory_uri(); ?>/img/about_check_icon.png" alt="check"></span>
          <p class="message">スキルを身につけて自己肯定感UP</p>
        </li>
        <li>
          <span><img src="<?php echo get_template_directory_uri(); ?>/img/about_check_icon.png" alt="check"></span>
          <p class="message">余裕のある暮らしを目指せる</p>
        </li>
        <li>
          <span><img src="<?php echo get_template_directory_uri(); ?>/img/about_check_icon.png" alt="check"></span>
          <p class="message">やりたいことを仕事にできる</p>
        </li>
      </ul>
    </section>

    <section id="power" class="wrapper inner">
      <h3 class="box-title">プログラミングスキルで案件を獲得するためには</h3>
      <h3 class="box-title back-text yellow">３つの力が必要です</h3>
      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/about_power1.png" alt="技術力のアイコン">
          <h3 class="box-title">技術力</h3>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/about_power2.png" alt="営業力のアイコン">
          <h3 class="box-title">営業力</h3>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/about_power3.png" alt="継続力のアイコン">
          <h3 class="box-title">継続力</h3>
        </li>
      </ul>
    </section>

    <section id="about" class="wrapper shadow-box">
      <h3 class="section-title fadein">プロナビとは<span>about</span></h3>

      <div class="flex-box">
        <div class="flex-left">
          <div class="circle">
            <p class="circle-left message">マンツーマン<br>コーチング</p>
            <p class="circle-right message">実践型<br>制作学習</p>
          </div>
          <div class="shadow-box">
            <p class="text">受講生同士のコミュニティ</p>
            <p class="small">Pro Naviには、同じ夢に向かうコミュニティがあり、<Br>質問・相談・成果報告を通じてモチベーションを保てます。</p>
          </div>
        </div>
        <div class="flex-right">
          <p class="message">“技術 × 営業 × 継続 × 仲間”で案件獲得まで徹底サポート。 </p>
          <p class="small">Pro Naviは、「コーチング型プログラミングスクール」。 専属コーチがあなたの課題に合わせて1対1で伴走し、 同じ目標を持つ仲間と切磋琢磨できるコミュニティも完備。
            技術だけでなく、営業・案件獲得・継続サポートまでサポート。 「一人では不安」という方でも、一緒に頑張る仲間と共に安心してスキルを仕事に変えられます。</p>
            <div class="button">
            <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="btn small">コミュニティを詳しく知る 〉</a>
              <a href="https://line.me/R/ti/p/@939dwake" target="_blank" class="btn small">無料体験に申し込む 〉</a>
            </div>
        </div>
      </div>
    </section>

    <section id="curriculum" class="wrapper">
      <h4 class="section-title fadein">カリキュラム<span>curriculum</span></h4>
      <dl class="step inner">
        <dt class="month">1month</dt>
        <dd class="content">
          <span class="label">授業</span>
          <h3 box-title>プログラミング基礎</h3>
          <p class="small">HTML/CSSの基礎を徹底的に学習</p>
        </dd>
        <dt class="month">2–3month</dt>
        <dd class="content">
          <span class="label">授業</span>
          <h3 box-title>模写コーディング</h3>
          <p class="small">HTML/CSSの基礎を徹底的に学習</p>
        </dd>
        <dt class="month">4month</dt>
        <dd class="content">
          <span class="label">授業</span>
          <h3 box-title>オリジナルサイト作成</h3>
          <p class="small">HTML/CSSの基礎を徹底的に学習</p>
        </dd>
        <dt class="month">5month</dt>
        <dd class="content">
          <span class="label case">案件</span>
          <h3 box-title>案件獲得サポート</h3>
          <p class="small">HTML/CSSの基礎を徹底的に学習</p>
        </dd>
        <dt class="month">6month</dt>
        <dd class="content">
          <span class="label case">案件</span>
          <h3 box-title>案件獲得時の営業同行</h3>
          <p class="small">HTML/CSSの基礎を徹底的に学習</p>
        </dd>
      </dl>
      <p class="small inner">
        ※期間は未経験受講者の目安です。実際にはその方に合わせたスケジュールを組んでいきます。
      </p>
    </section>

    <section id="price" class="wrapper">
      <h3 class="section-title fadein">料金<span>price</span></h3>
      <div class="shadow-box inner">
        <h3 class="box-title">６ヶ月集中プログラム</h3>
        <p class="price">
          <span class="small">総額</span>
          <span class="middle">550,000</span>円<span class="small">（税込）</span>
        </p>

        <ul>
          <div class="li-left">
            <li class="text">24時間質問対応</li>
            <li class="text">あなただけの学習計画を作成</li>
          </div>
          <div class="li-right">
            <li class="text">定期的な講義で苦手を克服</li>
            <li class="text">案件獲得のサポート</li>
          </div>
        </ul>
        <p class="small">※初回授業を受けてから判断できます。
          「雰囲気が違う」「自分に合わない」と感じても、クーリングオフ期間中なら退会・返金が可能です。
          初めての学習でも安心して始めてください。</p>
      </div>
    </section>

    <section id="works" class="flip-slider wrapper">
      <h3 class="section-title fadein">生徒の制作実績</h3><span class="section-title-deco">works</span>
      <div class="flip-slider__inner js-flip-slider">
        <a href="https://pronavi-board.noe-p.com/%e7%be%8e%e5%ae%b9%e3%82%a8%e3%82%b9%e3%83%86%e3%82%b5%e3%83%ad%e3%83%b3%e3%81%aehp/"
          target="_blank">
          <div class="slider-inner">
            <div class="front">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/1-front.png" alt="works1-front" />
            </div>
            <div class="back">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/1-back.png" alt="works1-back" />
            </div>
          </div>
        </a>

        <a href="https://pronavi-board.noe-p.com/quiet/ " target="_blank">
          <div class="slider-inner">
            <div class="front">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/2-front.png" alt="works2-front" />
            </div>
            <div class="back">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/2-back.png" alt="works2-back" />
            </div>
          </div>
        </a>

        <a href="https://pronavi-board.noe-p.com/trattoria-verde/" target="_blank">
          <div class="slider-inner">
            <div class="front">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/3-front.png" alt="works3-front" />
            </div>
            <div class="back">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/3-back.png" alt="works3-back" />
            </div>
          </div>
        </a>

        <a href="https://pronavi-board.noe-p.com/%e6%9d%b1%e4%ba%ac%e3%82%b5%e3%83%b3%e3%83%80%e3%83%bc%e3%82%b9ec%e3%82%b0%e3%83%83%e3%82%ba%e3%82%b5%e3%82%a4%e3%83%88/"
          target="_blank">
          <div class="slider-inner">
            <div class="front">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/4-front.png" alt="works4-front" />
            </div>
            <div class="back">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/4-back.png" alt="works4-back" />
            </div>
          </div>
        </a>

        <a href="https://pronavi-board.noe-p.com/%e3%82%aa%e3%83%aa%e3%82%b8%e3%83%8a%e3%83%abbarber%e3%82%b5%e3%82%a4%e3%83%88/"
          target="_blank">
          <div class="slider-inner">
            <div class="front">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/5-front.png" alt="works5-front" />
            </div>
            <div class="back">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/5-back.png" alt="works5-back" />
            </div>
          </div>
        </a>

        <a href="https://pronavi-board.noe-p.com/%e3%82%86%e3%81%99%e3%81%af%e3%82%89%e9%9b%b2%e3%81%ae%e4%b8%8a%e3%81%ae%e5%9b%b3%e6%9b%b8%e9%a4%a8lp/"
          target="_blank">
          <div class="slider-inner">
            <div class="front">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/6-front.png" alt="works6-front" />
            </div>
            <div class="back">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/6-back.png" alt="works6-back" />
            </div>
          </div>
        </a>
      </div>
      <div class="viewmore">
        <a href="https://pronavi-board.noe-p.com/"  target="_blank">View More ></a>
      </div>
    </section>
  </main>
<?php get_footer(); ?>