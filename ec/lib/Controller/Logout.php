<?php

namespace MyApp\Controller;

class Logout extends \MyApp\Controller {


  public function run() {

    // ログインしていたら
    if ($this->isLoggedIn()) {

      // セッション初期化
      $_SESSION = [];

      // セッションがセットされてたらクッキー削除、セッション削除
      if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), "", time() - 86400, '/');
      }
      session_destroy();

      // リダイレクト
      header('Location: ' . SITE_URL);
      exit();
    }
  }

}
