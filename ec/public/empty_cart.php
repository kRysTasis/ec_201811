<?php

require_once(__DIR__ . '/../config/config.php');

// カートを初期化して空にする
$_SESSION['cart'] = array();
unset($_SESSION['cart']);

header('Location: ' . 'cart.php');
exit();

?>
