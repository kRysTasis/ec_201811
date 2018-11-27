<?php

namespace MyApp\Controller;

class Signup extends \MyApp\Controller {

  // ログインしていたらindexに飛ばす
  public function run() {
    if ($this->isLoggedIn()) {
      header('Location: ' . SITE_URL);
      exit();
    }

    // POSTでデータが来たらポストプロセス発動
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->postProcess();
    }
  }


  protected function postProcess() {

    // token検証関数発動！
    $this->_validateToken();

    // エラーがあったらリターン、無かったらOK
    if ($this->hasError()) {
      return;
    } else {

      // UserModelに接続
      try {
        $userModel = new \MyApp\Model\User();
        $userModel->create([
          'email' => $_POST['email'],
          'username' => $_POST['username'],
          'password' => $_POST['password']
        ]);
      } catch (\MyApp\Exception\DuplicateEmail $e) {

          // エラーをemailキーにセット
          $this->setErrors('email', $e->getMessage());
          return;
      } catch (\MyApp\Exception\DuplicateUsername $e) {

          // エラーをusernameキーにセット
          $this->setErrors('username', $e->getMessage());
          return;
      }
    }

    // セッションに設定
    $_SESSION['email'] = $_POST['email'];

    // 確認画面に飛ばす
    header('Location: ' . SITE_URL . '/check.php');
    exit();
  }

  // token検証関数
  private function _validateToken() {
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
      echo "Invalid Token!";
      exit();
    }
  }



}
