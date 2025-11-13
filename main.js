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

});