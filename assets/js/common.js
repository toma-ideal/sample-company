/* -------------------------
 * ハンバーガーボタン + ナビ表示アニメーション
 * ------------------------- */
const toggle = document.querySelector(".open-btn");
const nav = document.querySelector(".header .page__nav");
const header = document.querySelector(".header");
const navItems = document.querySelectorAll(".header .anm");
// const main = document.querySelector(".layout__main");
const body = document.body;

toggle.addEventListener("click", function () {
  toggle.classList.toggle("active");
  nav.classList.toggle("active");
  header.classList.toggle("active");

  // すべてのanm要素にactiveを追加/削除
  navItems.forEach((item) => {
    item.classList.toggle("active");
  });

  //遅延して背景スクロールを無効化;
  if (toggle.classList.contains("active")) {
    body.classList.add("no-scroll");
  } else {
    body.classList.remove("no-scroll"); // 解除
  }
});

// メニュー内のすべてのリンクをクリック時
const menuLinks = document.querySelectorAll(".page__nav a");

menuLinks.forEach((link) => {
  link.addEventListener("click", () => {
    // メニューを閉じる
    toggle.classList.remove("active");
    nav.classList.remove("active");
    main.classList.remove("active");
    header.classList.remove("active");

    // すべてのanm要素からactiveを削除
    navItems.forEach((item) => {
      item.classList.remove("active");
    });

    body.classList.remove("no-scroll");
  });
});
