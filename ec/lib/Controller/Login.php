<?php

namespace MyApp\Controller;

class Login extends \MyApp\Controller {

  // ログインしていたらindexに飛ばす
  public function run() {
    if ($this->isLoggedIn()) {
      header('Location: ' . SITE_URL);
      exit();
    }

    // POSTで情報が渡ってきたらポストプロセス発動
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->postProcess();
    }
  }

  // ポストプロセス詳細
  protected function postProcess() {

    // 仕込んだトークン検証関数発動
    $this->_validateToken();

    // エラーがあったらリターン、無かったらOK
    if ($this->hasError()) {
      return;
    } else {

      // UserModelと接続
      try {
        $userModel = new \MyApp\Model\User();
        $user = $userModel->login([
          'username' => $_POST['username'],
          'password' => $_POST['password']
        ]);

      } catch (\MyApp\Exception\UnmatchUsernameOrPassword $e) {
        $this->setErrors('login', $e->getMessage());
        return;
      }

      // login処理
      session_regenerate_id(true);
      $_SESSION['me'] = $user;


      // リダイレクト
      header('Location: ' . SITE_URL);
      exit;
    }
  }

  // tokenが正しければパス
  private function _validateToken() {
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
      echo "Invalid Token!";
      exit();
    }
  }

}
