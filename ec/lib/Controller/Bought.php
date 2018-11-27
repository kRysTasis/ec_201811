<?php

namespace MyApp\Controller;

class Bought extends \MyApp\Controller {

  //　ログインしたら、ユーザーネームを取得。
  public function login_name() {
    return (isset($_SESSION['me'])) ? $_SESSION['me'] : 'login';
  }

  // ログインしていたら、メニューにlogout、していなかったら、signup
  public function signupOrLogout() {
    return (isset($_SESSION['me'])) ? '<a href="logout.php">logout</a>' : '<a href="signup.php">signup</a>';
  }


  public function run() {

    $_SESSION['cart'] = array();
    unset($_SESSION['cart']);

    // if ($_SERVER['REQUEST_METHOD'] === "POST") {
    //   if (!$this->isLoggedIn()) {
    //     header('Location: ' . 'login.php');
    //     exit();
    //   }
    //
    //   $new_add_cart = $_POST['cart'];
    //   if (empty($_SESSION['cart'])) {
    //     $_SESSION['cart'] = [$new_add_cart];
    //   } else {
    //     $_SESSION['cart'][] = $new_add_cart;
    //   }
    // }
  }

  public function showcart() {
    return (isset($_SESSION['cart'])) ? $_SESSION['cart'] : "cart is empty";
  }

  public function getDetailForCart() {
    $cart_id_list = $_SESSION['cart'];
    $detailForCart = new \MyApp\Model\Cart();
    $res = $detailForCart->getDetailForCart($cart_id_list);
    return $res;
  }

  public function showTotal() {
    $total = 0;
    foreach($this->getDetailForCart() as $detail) {
      $total += $detail['price'];
    }
    return $total;
  }

}
