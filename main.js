$(function () {

  // header
  const header = document.querySelector("header");
  const toggle = document.querySelector(".hamburger_toggle");
  const mask = document.querySelector(".menu-bg");

  toggle.addEventListener("click", () => {
    header.classList.toggle("active");
  });

  mask.addEventListener("click", () => {
    header.classList.remove("active");
  });
  // ------------------------------------------------------
  // Topページ Flow からの背景色切り替え
  // ------------------------------------------------------
  // スクロールで色を切り替えたいセクション
  const sections = document.querySelectorAll(".js-theme-section");

  if (!sections.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const theme = entry.target.dataset.theme; // data-theme="blue" など

          // ① いったん全セクションから theme-xxx を外す
          sections.forEach((sec) => {
            sec.classList.forEach((cls) => {
              if (cls.startsWith("theme-")) {
                sec.classList.remove(cls);
              }
            });
          });

          // ② 今表示されているセクションにだけ theme-xxx を付ける
          if (theme) {
            entry.target.classList.add(`theme-${theme}`);
          }
        }
      });
    },
    {
      threshold: 0.5, // セクションの 50% が見えたら切り替え
    }
  );
  sections.forEach((sec) => observer.observe(sec));
});