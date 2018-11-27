<?php

namespace MyApp\Exception;

class DuplicateEmail extends \Exception {
  protected $message = 'このメールアドレスは既に登録されています。';
}
