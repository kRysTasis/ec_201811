<?php

namespace MyApp\Exception;

class UnmatchUsernameOrPassword extends \Exception {
  protected $message = 'ユーザーネームかパスワードが間違っています。';
}
