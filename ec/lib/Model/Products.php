<?php

namespace MyApp\Model;

class Products extends \MyApp\Model {

  
  public function getProductsUrl() {
    $stmt = $this->db->query("select url from products");
    // $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
    $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    // return $res[0];
    return $res;
  }

  public function getProductsInfo() {
    $stmt = $this->db->query("select * from products");
    $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $res;
  }

  public function getDetail($id) {
    $stmt = $this->db->prepare("select * from products where id = :id");
    $stmt->execute([
      ":id" => $id
    ]);
    $res = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $res;
  }

}
