<?php

namespace MyApp\Model;

class User extends \MyApp\Model {


  public function create($values) {
    $stmt = $this->db->prepare("select * from users where email = :email");
    $stmt->execute([
      ':email' => $values['email']
    ]);
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
    $dbEmail = $stmt->fetch();

    if (!empty($dbEmail)) {
      throw new \MyApp\Exception\DuplicateEmail();
    }

    $stmt = $this->db->prepare("select * from users where username = :username");
    $stmt->execute([
      ':username' => $values['username']
    ]);
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
    $dbUsername = $stmt->fetch();

    if (!empty($dbUsername)) {
      throw new \MyApp\Exception\DuplicateUsername();
    }

    $sql = "insert into users (email, username, password, created, modified) values (:email, :username, :password, now(), now())";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([
      ":email" => $values['email'],
      ":username" => $values['username'],
      ":password" => password_hash($values['password'], PASSWORD_DEFAULT)
    ]);

  }

  public function login($values) {
    $sql = "select * from users where username = :username";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([
      ":username" => $values['username']
    ]);
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
    $user = $stmt->fetch();

    if (empty($user)) {
      throw new \MyApp\Exception\UnmatchUsernameOrPassword();
    }

    if (!password_verify($values['password'], $user->password)) {
      throw new \MyApp\Exception\UnmatchUsernameOrPassword();
    }

    return $user->username;
  }
}
