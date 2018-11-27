<?php

namespace MyApp\Exception;

class DuplicateUsername extends \Exception {
  protected $message = 'このユーザーネームは既に登録されています。';
}
