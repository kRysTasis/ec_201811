<?php

namespace MyApp;

class Model {

  // PDOObjを格納
  protected $db;

  // 初期設定でPDO作成
  public function __construct() {
    try {
      $this->db = new \PDO(DSN, DB_USERNAME, DB_PASSWORD);
    } catch (\PDOException $e) {
      echo $e->getMessage();
      exit();
    }
  }
}
