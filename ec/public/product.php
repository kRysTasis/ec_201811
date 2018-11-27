<?php

require_once(__DIR__ . '/../config/config.php');

$app = new \MyApp\Controller\Index();

$app->run();

$detail = $app->getDetail();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<title>I love Hamilton</title>
</head>
<body>

<div id="wrapper">
	<header class="product_header">
		<div class="header-wrap">
			<div id="header-left">
			</div>
			<div id="header-center">
				<a href="index.php"><h1>I love Hamilton</h1></a>
			</div>
			<div id="header-right">
				<nav>
					<ul>
						<li><a href="login.php"><?= h($app->login_name()); ?></a></li>
						<li><?= $app->signupOrLogout(); ?></li>
						<li><a href="cart.php">cart</a></li>
						<li>
							<div class="humberger">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		

	</header>

	<div id="hum-hide">
		<ul>
			<li><a href="login.php"><span class="loginName"><?= h($app->login_name()); ?></span></a></li>
			<li><?= $app->signupOrLogout(); ?></li>
			<li><a href="cart.php">cart</a></li>
		</ul>
	</div>

	<div id="content-wrap">
		<div class="content">

			<div id="products_detail">
				<div id="product_image_area">
					<div id="product_image">
						<img src="image/<?= h($detail['url']); ?>">
					</div>
				</div>

				<div id="product_desc">
					<section class="product_name">
						<h1><?= h($detail['collection']); ?></h1>
						<h2><?= h($detail['name']); ?></h2>
					</section>
					<section class="product_price">
						<p>¥<?= h($detail['price']); ?></p>
					</section>
					<button type="submit" class="like"><span class="like_text">Like</span><span class="heart">♡</span></button>
					<form method="post" action="cart.php">
						<input type="hidden" name="cart" value="<?= h($detail['id']); ?>">
						<button type="submit" class="add_cart">Add To Cart</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div id="footer-wrap">
			<div id="footer-left">
				<ul class="footer-li">
					<li><a href="company.php">ご利用規約</a></li>
					<li><a href="company.php">プライバシーポリシー</a></li>
					<li><a href="company.php">特定商取引に基づく表記</a></li>
					<li><a href="company.php">会社概要</a></li>
				</ul>
				<ul class="follow-me">
	  				<li><a href="https://twitter.com"></a></li>
	  				<li><a href="https://www.facebook.com"></a></li>
	  				<li><a href="https://plus.google.com"></a></li>
				</ul>
			</div>
			<div id="footer-right">
				<small><p>I love Hamilton</p>Copyright©️ 2018 I love Hamilton All Rights Reserved.</small>
			</div>
		</div>
	</footer>

</div>
</body>
</html>
