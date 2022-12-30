/* drawer */
$(function () {
  $(".bl_drawerBtn").on("click", function () {
    $(this).toggleClass("action");
    $(".bl_drawer").toggleClass("action");
    $("body").toggleClass("noscroll");
  });
});

$(function () {
  //.bl_drawer_itemを押すとついてたactionが外れてドロワーメニューがひっこむ
  $(".bl_drawer_item a").on("click", function () {
    $(".bl_drawerBtn").toggleClass("action");
    $(".bl_drawer").toggleClass("action");
    $("body").toggleClass("noscroll");
  });
});

/* ニュースのアコーディオン */
// $(function () {
//   $(".news_list dt").on("click", function () {
//     $(this).next().slideToggle(300);
//   });
// });

/* アコーディオン */
$(function () {
  $(".bl_faq_item_answer:first").show(); //ひとつ目は最初から
  $(".bl_faq_list .bl_faq_item_question").click(function () {
    $(this).next(".bl_faq_item_answer").slideToggle(300);
    $(this).toggleClass("open");
  });
});

var headerH = $("#header").outerHeight(true); //headerの高さを取得

//スクロール途中からヘッダーの高さを変化させるための設定を関数でまとめる
function FixedAnime() {
  //ヘッダーの高さを取得
  var scroll = $(window).scrollTop();
  if (scroll >= headerH) {
    //ヘッダーの高さを超えたら
    $("#header").addClass("HeightMin"); //#headerについているHeightMinというクラス名を付与
    $(".bl_drawerBtn").addClass("HeightMin"); //#headerについているHeightMinというクラス名を付与
  } else {
    $("#header").removeClass("HeightMin");
    $("#header").removeClass("HeightMin"); //HeightMinというクラス名を除去
  }
}
// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  FixedAnime(); //スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
});

/* スクロールヒント */
// new ScrollHint(".js-scrollable");

/* ローディングアニメーション */
$(function () {
  var webStorage = function () {
    if (sessionStorage.getItem("access")) {
      /*
        2回目以降アクセス時の処理
      */
      $(".loading").addClass("is-active");
    } else {
      /*
        初回アクセス時の処理
      */
      sessionStorage.setItem("access", "true"); // sessionStorageにデータを保存
      $(".loading-animation").addClass("is-active"); // loadingアニメーションを表示
      setTimeout(function () {
        // ローディングを数秒後に非表示にする
        $(".loading").addClass("is-active");
        $(".loading-animation").removeClass("is-active");
      }, 4000); // ローディングを表示する時間
    }
  };
  webStorage();
});

/* AOS */
$(document).ready(function () {
  /* animation */
  AOS.init({
    duration: 1000,
    once: true,
  });
});
