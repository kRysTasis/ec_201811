<?php

namespace MyApp\Controller;

class Product extends \MyApp\Controller {


  //　ログインしたら、ユーザーネームを取得。
  public function login_name() {
    return (isset($_SESSION['me'])) ? $_SESSION['me'] : 'login';
  }

  // ログインしていたら、メニューにlogout、していなかったら、signup
  public function signupOrLogout() {
    return (isset($_SESSION['me'])) ? '<a href="logout.php">logout</a>' : '<a href="signup.php">signup</a>';
  }

}
