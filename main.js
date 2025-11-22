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
  window.addEventListener('scroll', function () {
    const fixed = document.querySelector('.fixed');

    // 例えば50pxスクロールしたら背景色をつける
    if (window.scrollY > 50) {
      fixed.classList.add('scrolled');
    } else {
      fixed.classList.remove('scrolled');
    }

  }); // ← ここが抜けていた！

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

  // -----------------------------------------------
  // 講師モーダル（top)
  // -----------------------------------------------
  const teacherData = {
    tetsu: {
      img: 'img/teacher_pic_tetsu.png',
      position: '現役エンジニア講師',
      name: 'TETSU',
      message: 'プログラミング学習は、正しいやり方で続けていけば必ず力になります。ただ「根性で頑張る」のではなく、あなたの性格や生活リズムに合った学習ペースを一緒に設計していきましょう。うまくいかない時は原因を分析しながら、学び方そのものをアップデートしていきます。無理なく継続できて、着実にスキルが積み上がる学習方法を、一緒に伴走しながら見つけていきましょう。'
    },
    yuriko: {
      img: 'img/teacher_pic_yuriko.png',
      position: '現役エンジニア講師',
      name: 'YURIKO',
      message: '私自身ももともとは未経験からのスタートで、仕事や生活と両立しながら学習を続けてきました。その経験があるからこそ、「時間がない」「自信が持てない」といった不安にも寄り添いながら、現実的なロードマップを一緒に組み立てていきます。小さな達成を積み重ねていけば、気づいた時にはできることが大きく変わっています。一歩ずつでも前に進めるように、学習面・メンタル面の両方からサポートしていきます。'
    },
    sora: {
      img: 'img/teacher_pic_sora.png',
      position: '現役エンジニア講師',
      name: 'SORA',
      message: 'プログラミングは「正解を覚える」よりも、「自分で考えて調べて形にする力」が大切だと考えています。授業ではコードを書くことはもちろん、なぜそう書くのか、エラーが出た時にどう考えるのかを一緒に言語化していきます。最初は難しく感じても、考え方の型が身につけば、一人でも問題を解決できるようになります。「自分でできた！」という成功体験を増やしながら、実務でも通用する思考力を育てていきましょう。'
    },
    minami: {
      img: 'img/teacher_pic_minami.png',
      position: '現役エンジニア講師',
      name: 'MINAMI',
      message: '現場では「知っている」より「ちゃんと動くものをつくれるか」が求められます。そのため授業では、実際の案件をイメージした課題や、小さくても完成させる制作を大事にしています。途中でつまずいたとしても、原因を一緒に整理しながら、最後までやり切る経験を積んでいきましょう。実装力と継続力の両方を育てることで、卒業後も自分の力で成長し続けられるエンジニアを目指していきます。'
    }
  };

  const modal = document.getElementById('teacher-modal');

  if (modal) {
    const modalClose = modal.querySelector('.teacher-modal-close');
    const modalOverlay = modal.querySelector('.teacher-modal-overlay');
    const moreButtons = document.querySelectorAll('.teacher_more_button');

    // moreボタンクリック時
    moreButtons.forEach(button => {
      button.addEventListener('click', function (e) {
        e.preventDefault();
        const teacherId = this.getAttribute('data-teacher');
        const teacher = teacherData[teacherId];

        if (teacher) {
          modal.querySelector('.teacher-modal-pic').src = teacher.img;
          modal.querySelector('.teacher-modal-pic').alt = teacher.name;
          modal.querySelector('.teacher-modal-position').textContent = teacher.position;
          modal.querySelector('.teacher-modal-name').textContent = teacher.name;
          modal.querySelector('.teacher-modal-message').textContent = teacher.message;

          modal.classList.add('is-active');
          document.body.style.overflow = 'hidden';
        }
      });
    });

    // モーダルを閉じる関数
    function closeModal() {
      modal.classList.remove('is-active');
      document.body.style.overflow = '';
    }

    // 閉じるボタンクリック時
    if (modalClose) {
      modalClose.addEventListener('click', closeModal);
    }

    // オーバーレイクリック時
    if (modalOverlay) {
      modalOverlay.addEventListener('click', closeModal);
    }

    // ESCキーでモーダルを閉じる
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && modal.classList.contains('is-active')) {
        closeModal();
      }
    });
  }

  // -----------------------------------------------
  // TopのFlow-Teacher - スクロールで背景色切り替え
  // -----------------------------------------------
  function handleThemeSections() {
    const flowSection = document.getElementById('flow');
    const teacherSection = document.getElementById('teacher');

    if (!flowSection || !teacherSection) return;

    const flowRect = flowSection.getBoundingClientRect();
    const teacherRect = teacherSection.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    // flowセクションの上部が画面の30%あたりに来たら、flowとteacherの両方をアクティブに
    // teacherセクションが画面を抜けたら、両方を非アクティブに
    if (flowRect.top < windowHeight * 0.3 && teacherRect.bottom > windowHeight * 0.5) {
      flowSection.classList.add('is-active');
      teacherSection.classList.add('is-active');
    } else {
      flowSection.classList.remove('is-active');
      teacherSection.classList.remove('is-active');
    }
  }

  // 初回実行
  handleThemeSections();

  // スクロール時に実行
  $(window).on('scroll', function () {
    handleThemeSections();
  });

});