<?php

namespace MyApp;

class Controller {

  // error情報を格納するプロパティ
  private $_errors;

  // value情報を格納するプロパティ
  private $_values;

  // 連想配列でDBから取得したもの。後でviewからkey指定で取り出す。
  private $_detail;

  //　controllerでプロパティセット。
  public function setDetail($detail) {
    $this->_detail = $detail;
  }

  // viewから取得する。
  public function getDetail() {
    return $this->_detail;
  }

  // 認証用tokenを仕込む
  public function __construct() {
    if (!isset($_SESSION['token'])) {
      $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(16));
    }

    $this->_errors = new \stdClass();
    $this->_values = new \stdClass();
  }

  // valuesを設定
  public function setValues($key, $value) {
    return $this->_values->$key = $value;
  }

  // valuesを取得
  public function getValues() {
    return $this->_values;
  }

  // errorを設定
  public function setErrors($key, $error) {
    $this->_errors->$key = $error;
  }

  // errorを取得(stdClass)
  public function getErrors($key) {
    return isset($this->_errors->$key) ? $this->_errors->$key : "";
  }

  // errorを持っているか
  protected function hasError() {
    return !empty(get_object_vars($this->_errors));
  }

  // loginしているか
  protected function isLoggedIn() {
    return isset($_SESSION['me']) && !empty($_SESSION['me']);
  }

  // login_user情報
  public function user() {
    return $this->isLoggedIn() ? $_SESSION['me'] : null;
  }

}
