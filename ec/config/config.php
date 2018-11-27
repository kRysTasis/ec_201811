<?php

// error情報を表示させる
ini_set('display_error', 1);

// DB情報の定数
define('DSN', 'mysql:host=localhost;dbname=ec_login');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', '1234');

// トップページの定数
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

// function, autoload読み込み
require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');

// セッション使用
session_start();
