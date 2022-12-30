//----------------------------------------------------------------------
//  モード
//----------------------------------------------------------------------
"use strict";

//----------------------------------------------------------------------
//  モジュール読み込み
//----------------------------------------------------------------------
const gulp = require("gulp");
const { src, dest, series, parallel, watch, tree } = require("gulp");

const bs = require("browser-sync");

//----------------------------------------------------------------------
//  関数定義
//----------------------------------------------------------------------
function browserSync(done) {
  bs({
    files: ["*.php", "*.scss", "*.css", "*.html", "*.js"], // "./**/*.scss"などファイルを変更したら更新させたいパスを追加する
    port: 80, // browsersyncサーバが使うポート番号を変更できる
    proxy: "localhost:10098", // ローカルにある「Site Domain」に合わせる
    notify: false, // ブラウザ更新時に出てくる通知を非表示にする
    open: "external", // ローカルIPアドレスでサーバを立ち上げる
  });

  done();
}

//----------------------------------------------------------------------
//  タスク定義
//----------------------------------------------------------------------
exports.bs = series(browserSync);

/************************************************************************/
/*  END OF FILE                                                         */
/************************************************************************/