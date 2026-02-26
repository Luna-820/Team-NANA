<?php
// ページ個別のSEO設定
$page_title = "オフ会一覧｜ProNavi";
$page_description = "ProNavi受講生同士の交流の記録。全国各地で開催されたオフ会の様子を一覧でご紹介します。オンラインの枠を超えたリアルな繋がりや、切磋琢磨し合える仲間との交流の雰囲気をご覧ください。";
get_header();
?>

<div class="video-bg">
    <video src="<?php echo get_template_directory_uri(); ?>/img/leaf_bg_landscape.mp4" autoplay muted loop playsinline></video>
</div>


  <main>
    <section id="fv" class="wrapper">
      <span class="section-title__en">MEETUP</span>
      <h2 class="section-title flex-left fadein2">オフ会一覧</h2>
    </section>

    <section class="meetup-list">
      <div class="wrapper">
        <ul class="meetups">

            <?php 
            // 投稿タイプを post に指定
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'post_type'      => 'post',   // ← 通常の投稿
                'posts_per_page' => get_option('posts_per_page'),       // 管理画面の数値を取得
                'paged'          => $paged,
                'orderby'        => 'date',
                'order'          => 'ASC',
            );
            $news_query = new WP_Query($args);

            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
            ?>
          <li class="meetup-item">
            <div class="left">
              <h3 class="section-title">
                <span class="open">第<?php the_field('news_holding_times'); ?>回</span><span class="small">Meetup</span>
              </h3>
              <p class="text">開催地：<?php the_field('new_venue'); ?><br />参加人数：<?php the_field('new_entry_number_of_people'); ?>人</p>
              <dl class="comment">
                <dt class="text">「<?php the_field('new_comment'); ?>」</dt>
                <dd><?php the_field('new_name'); ?></dd>
              </dl>
            </div>
            <div class="right">
                <?php 
                $image = get_field('new_img');
                if ($image): 
                ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
          </li>
          <?php
            endwhile;
            wp_reset_postdata();
            else :
            ?>
            <p>投稿はありません</p>
            <?php endif; ?>

        </ul>

        <nav class="pagination">
            <?php
            echo paginate_links( array(
                'total'        => $news_query->max_num_pages,
                'current'      => $paged,
                'format'       => '?paged=%#%',
                'prev_text'    => '前へ',
                'next_text'    => '次へ',
                'type'         => 'plain',
            ) );
            ?>
          <!-- <a class="prev">前へ</a> -->
          <!-- <a class="page current">1</a> -->
          <!-- <a class="page">2</a> -->
          <!-- <a class="page">3</a> -->
          <!-- <a class="next">次へ</a> -->
        </nav>
        <?php wp_reset_postdata(); // ループが終わったら必ずリセット！ ?>
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