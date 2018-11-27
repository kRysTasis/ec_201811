<?php

namespace MyApp\Controller;

class Index extends \MyApp\Controller {


  // indexからpostで個別のデータをproduct.phpに送信し、詳細を問い合わせしてcontrollerのプロパティにセット。
  public function run() {
    if($_SERVER['REQUEST_METHOD'] === "POST") {
      $id = $_POST['id_data'];
      $this->getProductDetail($id);
    }
  }

  //　ログインしたら、ユーザーネームを取得。
  public function login_name() {
    return (isset($_SESSION['me'])) ? $_SESSION['me'] : 'login';
  }


  // ログインしていたら、メニューにlogout、していなかったら、signup
  public function signupOrLogout() {
    return (isset($_SESSION['me'])) ? '<a href="logout.php">logout</a>' : '<a href="signup.php">signup</a>';
  }


  // indexにデータベースの一覧を表示する。
  public function getInfo() {
    $productsInfo = new \MyApp\Model\Products();
    $res = $productsInfo->getProductsInfo();
    return $res;
  }


  // indexでクリックした要素を個別に取得し、controllerのプロパティにセット。
  public function getProductDetail($id) {
    $productDetail = new \MyApp\Model\Products();
    $res = $productDetail->getDetail($id);
    $this->setDetail($res);
  }
}
