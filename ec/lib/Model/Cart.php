<?php

namespace MyApp\Model;

class Cart extends \MyApp\Model {

  // 渡ってきたIDをDBから照合
  public function getDetailForCart($cart_id_list) {
    $stmt = $this->db->prepare("select * from products where id = :id");

    // 商品情報格納
    $result = [];

    // 渡ってきたIDでバインド
    foreach($cart_id_list as $cart_id) {
      $stmt->execute([
        ":id" => $cart_id
      ]);

      // resに格納
      $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);

      // resをresultと統合
      $result = array_merge($result, $res);
    }

    return $result;

  }


}
