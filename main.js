$(function () {
  // ------------------------------------
  // header ハンバーガー
  // ------------------------------------
const header = document.querySelector("header");
const toggle = document.querySelector(".hamburger_toggle");
const mask = document.querySelector(".menu-bg");
const hamburgerMenu = document.querySelector(".hamburger-menu");

// ハンバーガークリック
toggle.addEventListener("click", () => {
  header.classList.toggle("active");
});

// 黒い背景(mask)クリック → 閉じる
mask.addEventListener("click", () => {
  header.classList.remove("active");
});

// 白背景（メニュー外側）クリック → 閉じる
hamburgerMenu.addEventListener("click", () => {
  header.classList.remove("active");
});

// メニューの中の要素（リンクなど）は閉じないようにする
hamburgerMenu.querySelectorAll("*").forEach(el => {
  el.addEventListener("click", (e) => {
    e.stopPropagation();
  });
});

  // ------------------------------------
  // スムーススクロール（PAGE TOP も含む）
  // ------------------------------------
  $('a[href^="#"]').click(function () {
    let href = $(this).attr("href");
    let target = $(href === "#" || href === "" ? "html" : href);

    if (!target.length) return false;

    let position = target.offset().top;

    $("html, body").animate(
      { scrollTop: position },
      600,
      "swing"
    );

    return false;
  });

  // ------------------------------------
  // WORKS フリップスライダー（slick）
  // ------------------------------------
  if ($(".js-flip-slider").length) {
    $(".js-flip-slider").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 6000,
      cssEase: "linear",
      arrows: false,
      dots: false,
      pauseOnHover: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
  }
  // ------------------------------------
  // FAQ アコーディオン
  // ------------------------------------
  $('.js-faq-toggle').on('click', function () {
    const $item = $(this).closest('.faq-item');

    $('.faq-item').not($item).removeClass('is-open')
      .find('.faq-a').slideUp(200);

    $item.toggleClass('is-open');
    $item.find('.faq-a').stop().slideToggle(200);
  });

});
// ----------------------------------------
// // meetupセクション
// ----------------------------------------
const cards = document.querySelectorAll(".meetup");
const speed = 3;

window.addEventListener("scroll", () => {
  const scrollY = window.scrollY;
  const sectionHeight = window.innerHeight;

  const index = Math.min(Math.floor(scrollY / sectionHeight), cards.length - 1);
  cards.forEach((card, i) => {
    card.classList.toggle("active", i === index);
  });

  cards.forEach((card, i) => {
    const fill = card.querySelector(".scroll-meter .fill");

    const cardStart = i * sectionHeight;

    let progress = (scrollY - cardStart) / sectionHeight;
    progress = Math.min(Math.max(progress, 0), 1);

    fill.style.height = `${progress * 100}%`;
  });
});
// --------------------------------------
// 
// --------------------------------------
$(document).ready(function(){
  $('.vertical-slider').slick({
    vertical: true,
    verticalSwiping: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,          
    dots: false,           
    autoplay: true,
    autoplaySpeed: 0,       // 自動再生の間隔を0に
    speed: 7000,            // スクロールにかける時間(ms)
    cssEase: 'linear',      // 線形で止まらずスムーズ
    infinite: true          // 無限ループ
  });
});
// 
// 
// 
// スクロールを監視
window.addEventListener('scroll', function() {
  const fixed = document.querySelector('.fixed');

  // 例えば50pxスクロールしたら背景色をつける
  if (window.scrollY > 50) {
    fixed.classList.add('scrolled');
  } else {
    fixed.classList.remove('scrolled');
  }
    /*=================================================
   ふわっと出てくる 
  ===================================================*/

  // $(window).scroll(function () {
  //   $(".fadeIn").each(function () {
  //     var scroll = $(window).scrollTop();
  //     var target = $(this).offset().top;
  //     var windowHeight = $(window).height();
  //     if (scroll > target - windowHeight + $(this).outerHeight()) {
  //       // outerHeight()はpaddingを含めた高さを取得する
  //       $(this).addClass("is-show");
  //     }
  //   });
  // });

 /*=================================================
  スクロール時の画像フェード表示
  ===================================================*/
  // スクロール時のイベント
  $(window).scroll(function () {
    $(".section-title").each(function () {
      let scroll = $(window).scrollTop();
      let target = $(this).offset().top;
      let windowHeight = $(window).height();

      if (scroll > target - windowHeight + 200) {
        $(this).addClass('section-title-active');
      }
    });
  });

  // -----------------------------------------------
  // fadein
  // -----------------------------------------------
    function fadeInOnScroll() {
    $(".fadein").each(function () {
      const elemTop = $(this).offset().top;
      const scroll = $(window).scrollTop();
      const windowHeight = $(window).height();

      if (scroll > elemTop - windowHeight + 100) {
        $(this).addClass("active");
      }
    });
  }

  // 最初の実行
  fadeInOnScroll();

  // スクロールごとに実行
  $(window).on("scroll", function () {
    fadeInOnScroll();
  });


});