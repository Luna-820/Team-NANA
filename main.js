$(function () {
  // ------------------------------------
  // header ハンバーガー
  // ------------------------------------
  const header = document.querySelector("header");
  const toggle = document.querySelector(".hamburger_toggle");
  const mask = document.querySelector(".menu-bg");

  toggle.addEventListener("click", () => {
    header.classList.toggle("active");
  });

  mask.addEventListener("click", () => {
    header.classList.remove("active");
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