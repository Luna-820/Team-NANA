<?php
// ページ個別のSEO設定
$page_title = "受講生の声とコミュニティー紹介｜ProNavi";
$page_description = "ProNavi受講生のリアルな体験談。学習から実装・ポートフォリオ制作・案件獲得まで、コミュニティと伴走サポートでスキルが伸びたプロセスをご紹介します。";
get_header();
?>

<div class="video-bg">
    <video src="<?php echo get_template_directory_uri(); ?>/img/leaf_bg_landscape.mp4" autoplay muted loop playsinline></video>
</div>

  <main>
    <section id="fv" class="wrapper">
      <span class="section-title__en">VOICE</span>
      <h2 class="section-title flex-left fadein2">生徒の声 と コミュニティー</h2>
    </section>

    <section class="voices">
      <div class="wrapper">
        <h4 class="message">
          Pronaviで多くの受講生が、<br /><span class="fadein">“実践的な”</span>プログラミングスキル<br />を身につけています。
        </h4>

        <ul class="list">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/voice-1.png" alt="student1" class="fadein" />
            <div class="text-right">
              <p class="text-1">2023年4月入会</p>
              <p class="text-2">
                コードの書き方に不安がありましたが、一緒に見てその場でレビューして貰えたので自信になりました。
              </p>
              <p class="small">T・Nさん｜20代｜男性</p>
            </div>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/voice-2.png" alt="student2" class="fadein" />
            <div class="text-right">
              <p class="text-1">2023年5月入会</p>
              <p class="text-2">
                講師の方や向上心の高い仲間と伴走出来るので挫折せずに進められました。本当に入って良かったです！
              </p>
              <p class="small">S・Kさん｜20代｜男性</p>
            </div>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/voice-3.png" alt="student3" class="fadein" />
            <div class="text-right">
              <p class="text-1">2023年8月入会</p>
              <p class="text-2">
                副業からフリーランスになりたいと思って入会。好きな時間に自分の好きな人と働ける今が幸せです。
              </p>
              <p class="small">Y・Sさん｜30代｜女性</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="meetup-section">
      <div class="wrapper">
        <div class="wrapper-inner">

          <ul class="meetups">
            
            <li class="meetup">
              <div class="left">
                <h3 class="section-title">
                  <span class="yellow">第１回</span>プロナビオフ会<span class="small">Meetup</span>
                </h3>
                <p class="text">開催地：名古屋<br />参加人数：30人</p>
                <dl class="comment">
                  <dt class="text">「オンラインでしか話したことがなかった人たちと直接会えて、一気に距離が縮まりました。とても刺激になる時間でした。」</dt>
                  <dd>K.Yさん（30代/女性）</dd>
                </dl>
              </div>
              <div class="right">
                <img src="<?php echo get_template_directory_uri(); ?>/img/meetup-1.png" alt="オフ会写真1" />
                <div class="scroll-meter">
                  <div class="fill"></div>
                </div>
              </div>
            </li>
            
            <li class="meetup">
              <div class="left">
                <h3 class="section-title">
                  <span class="yellow">第２回</span>プロナビオフ会<span class="small">Meetup</span>
                </h3>
                <p class="text">開催地：東京<br />参加人数：50人</p>
                <dl class="comment">
                  <dt class="text">「最初は緊張していましたが、同じ目標を持った人ばかりで、すぐに打ち解けることができました。また参加したいと思えるイベントでした。」</dt>
                  <dd>T.Oさん（20代/女性）</dd>
                </dl>
                
              </div>
              <div class="right">
                <img src="<?php echo get_template_directory_uri(); ?>/img/meetup-2.png" alt="オフ会写真2" />
                <div class="scroll-meter">
                  <div class="fill"></div>
                </div>
              </div>
            </li>
            
            <li class="meetup">
              <div class="left">
                <h3 class="section-title">
                  <span class="yellow">第３回</span>プロナビオフ会<span class="small">Meetup</span>
                </h3>
                <p class="text">開催地：名古屋<br />参加人数：130人</p>
                <dl class="comment">
                  <dt class="text">「年齢関係なく話せる雰囲気がとてもよかったです。同じように頑張っている人の話を聞けて、モチベーションが上がりました。」</dt>
                  <dd>Y.Sさん（30代/男性）</dd>
                </dl>
                
              </div>
              <div class="right">
                <img src="<?php echo get_template_directory_uri(); ?>/img/meetup-3.png" alt="オフ会写真3" />
                <div class="scroll-meter">
                  <div class="fill"></div>
                </div>
              </div>
            </li>
            
            <li class="meetup">
              <div class="left">
                <h3 class="section-title">
                  <span class="yellow">第４回</span>プロナビオフ会<span class="small">Meetup</span>
                </h3>
                <p class="text">開催地：名古屋<br />参加人数：180人</p>
                <dl class="comment">
                  <dt class="text">「年齢やバックグラウンドに関係なく自然に話せる雰囲気でよかったです。みんな同じ目標に向かって努力していると実感でき、改めて頑張ろうと思えました。」</dt>
                  <dd>M.Kさん（30代/男性）</dd>
                </dl>
              </div>
              <div class="right">
                <img src="<?php echo get_template_directory_uri(); ?>/img/meetup-4.png" alt="オフ会写真4" />
                <div class="scroll-meter">
                  <div class="fill"></div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <a href="<?php echo esc_url( home_url( '/meetup' ) ); ?>" class="btn">もっと見る</a>
      </div>
    </section>

    <section class="metaleaf">
      <div class="wrapper">
        <div class="left">
          <h3 class="section-title">Metaleaf<span>作業会の紹介</span></h3>
          <p>アバターで参加できるオンラインスペース。<br>同じフェーズの仲間と交流しながら、集中できる作業空間です。<span>※無料で参加できるビジター体験が可能です。</span></p>
          <a href="https://line.me/R/ti/p/@420zidsx?oat_content=url" class="btn" target="_blank">ビジター体験を予約</a>
        </div>

        <ul class="list">
          <li class="fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/img/metaleaf-1.png" alt="metaleaf" />
            <p class="text">
              フリースペース <span>気軽に話せる仲間が集まれる場所。</span>
            </p>
          </li>

          <li class="fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/img/metaleaf-2.png" alt="metaleaf" />
            <p class="text">
              毎週月曜のセミナー <span>新しい発見や刺激が見つかる場所。</span>
            </p>
          </li>

          <li class="fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/img/metaleaf-3.png" alt="metaleaf" />
            <p class="text">
              初心者専用部屋 <span>先輩が優しく声をかけてくれる場所。</span>
            </p>
          </li>

          <li class="fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/img/metaleaf-4.png" alt="metaleaf" />
            <p class="text">
              モクモクスペース <span>静かに集中したい人のための場所。</span>
            </p>
          </li>

          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/metaleaf-5.png" alt="metaleaf" class="fadein" />
            <p class="text">
              チーム作業スペース <span>ハッカソン開催中に、チームで集まって開発作業を進める場所。</span>
            </p>
          </li>

          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/metaleaf.png" alt="metaleaf" class="fadein" />
          </li>

        </ul>
      </div>
    </section>

    <section class="hackathon">
      <div class="wrapper">
        <div class="left">
          <h3 class="section-title">Hackathon <span>実践型イベント「ハッカソン」</span></h3>
          <p class="text">ハッカソンは、初心者から上級者まで、学習段階に関係なく誰でも参加できる開発イベントです。
            チームにはさまざまなレベルのメンバーが集まり、それぞれの得意分野を活かしながら、一つのアイデアを形にしていきます。<br>
            <span>「まだ自信がない」という方でも、先輩メンバーや講師のサポートがあるので安心して参加できます。</span>
          </p>
          <a href="https://pronavi-board.noe-p.com/event/" class="btn" target="_blank">これまでのイベント</a>
        </div>

        <div class="slider-container">
          <div class="vertical-slider slider-up">
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/hackathon-1-1.png" alt="Meetup1" /></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/hackathon-1-2.png" alt="Meetup2" /></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/hackathon-voice-1.png" alt="Meetup3" /></div>
          </div>

          <div class="vertical-slider slider-down">
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/hackathon-2-1.png" alt="Meetup4" /></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/hackathon-2-2.png" alt="Meetup5" /></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/hackathon-voice-2.png" alt="Meetup6" /></div>
          </div>
        </div>
      </div>
    </section>

    <section id="works" class="flip-slider">
        <div class="wrapper">
            <h2 class="section-title">生徒の制作実績</h2>
            <span class="section-title-deco">works</span>
        </div>
        <div class="wrapper">
            <div class="flip-slider__inner js-flip-slider">
                <a href="https://pronavi-board.noe-p.com/%e7%be%8e%e5%ae%b9%e3%82%a8%e3%82%b9%e3%83%86%e3%82%b5%e3%83%ad%e3%83%b3%e3%81%aehp/" target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/1-front.png" alt="works1-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/1-back.png" alt="works1-back" /></div>
                    </div>
                </a>
                <a href="https://pronavi-board.noe-p.com/quiet/ " target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/2-front.png" alt="works2-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/2-back.png" alt="works2-back" /></div>
                    </div>
                </a>
                <a href="https://pronavi-board.noe-p.com/trattoria-verde/" target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/3-front.png" alt="works3-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/3-back.png" alt="works3-back" /></div>
                    </div>
                </a>
                <a href="https://pronavi-board.noe-p.com/%e6%9d%b1%e4%ba%ac%e3%82%b5%e3%83%b3%e3%83%80%e3%83%bc%e3%82%b9ec%e3%82%b0%e3%83%83%e3%82%ba%e3%82%b5%e3%82%a4%e3%83%88/" target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/4-front.png" alt="works4-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/4-back.png" alt="works4-back" /></div>
                    </div>
                </a>
                <a href="https://pronavi-board.noe-p.com/%e3%82%aa%e3%83%aa%e3%82%b8%e3%83%8a%e3%83%abbarber%e3%82%b5%e3%82%a4%e3%83%88/" target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/5-front.png" alt="works5-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/5-back.png" alt="works5-back" /></div>
                    </div>
                </a>
                <a href="https://pronavi-board.noe-p.com/%e3%82%86%e3%81%99%e3%81%af%e3%82%89%e9%9b%b2%e3%81%ae%e4%b8%8a%e3%81%ae%e5%9b%b3%e6%9b%b8%e9%a4%a8lp/" target="_blank">
                    <div class="slider-inner">
                        <div class="front"><img src="<?php echo get_template_directory_uri(); ?>/img/works/6-front.png" alt="works6-front" /></div>
                        <div class="back"><img src="<?php echo get_template_directory_uri(); ?>/img/works/6-back.png" alt="works6-back" /></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="wrapper viewmore">
            <a href="https://pronavi-board.noe-p.com/" target="_blank">View More ></a>
        </div>
    </section>
  </main>

<?php get_footer(); ?>