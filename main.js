$(function () {


  $(window).on('load', function () {
    setTimeout(function () {
      $('#loading').fadeOut(300); // フェードアウトで自然に消す
      $('#content').fadeIn(300);
    }, 4000);
  });


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

// ----------------------------------------
// // meetupセクション
// ----------------------------------------
const cards = document.querySelectorAll(".meetup");
const speed = 3;

  // セクション開始位置を取得
  const section = document.querySelector(".meetup-section");
  const sectionTop = section.offsetTop;

  window.addEventListener("scroll", () => {
    const scrollY = window.scrollY;

    // セクションに入った後のスクロール量
    const localScroll = scrollY - sectionTop;

    // セクションに入る前は全部リセット
    if (localScroll < 0) {
  cards.forEach((card, i) => {
    const fill = card.querySelector(".fill");
    fill.style.height = "0%";

    // ★ここがポイント
    card.classList.toggle("active", i === 0);
  });
  return;
}

    const sectionHeight = window.innerHeight;

    // どのカードを表示するか
    const index = Math.min(
      Math.floor(localScroll / sectionHeight),
      cards.length - 1
    );

    cards.forEach((card, i) => {
      card.classList.toggle("active", i === index);
    });

    // メーター計算
    cards.forEach((card, i) => {
      const fill = card.querySelector(".fill");
      const cardStart = i * sectionHeight;

      let progress = (localScroll - cardStart) / sectionHeight;
      progress = Math.min(Math.max(progress, 0), 1);

      fill.style.height = `${progress * 100}%`;
    });
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
// ハッカソンスライダー
// --------------------------------------
if ($(".vertical-slider").length) {
  $(".vertical-slider").slick({
    slidesToShow: 2.5,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 10000,
    cssEase: "linear",
    arrows: false,
    dots: false,
    vertical: true,
  });
}
// -----------------------------------------
// ヘッダー背景
// -----------------------------------------
// スクロールを監視
window.addEventListener('scroll', function() {
const fixed = document.querySelector('.fixed');

// 例えば50pxスクロールしたら背景色をつける
if (window.scrollY > 50) {
  fixed.classList.add('scrolled');
} else {
  fixed.classList.remove('scrolled');
}

// -----------------------------------------------
// fadein 遷移してすぐに
// -----------------------------------------------
$(window).on("load", function () {
  setTimeout(function () {
    $(".fadein2").addClass("active2");
  }, 50); // 50〜200msで調整
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