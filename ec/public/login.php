<?php

require_once(__DIR__ . '/../config/config.php');

$app = new \MyApp\Controller\Login();

$app->run();

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<title>EC site</title>
</head>
<body>
<div id="wrapper">
	<div class="header-banana"></div>
	<header class="login_header">
		<div class="header-wrap">
		<div id="signup_header">
			<a href="index.php"><h1>I love Hamilton</h1></a>
		</div>
		</div>
	</header>

	<div class="sign_up_form_wrap">
		<div class="sign_up_form">
			<form method="post" action="" name="login" id="login_form">
				<div class="sign_up_form_center">
					<h1>Log in</h1>
					<h2>User</h2>
						<input type="text" name="username" id="username" pattern="^[^0-9]+$" placeholder="Enter Username" required>
					<h2>Password</h2>
						<input type="password" name="password" id="password" placeholder="Enter Password" required>
						<p class="error_msg"><?php echo $msg; ?></p>
						<p class="err"><?= h($app->getErrors('login')); ?></p>
					<input type="submit" name="login" id="login" value="LOG IN">
					<p class="from_to">Don't Have An Account? <a href="signup.php">CREATE AN ACCOUNT</a></p>
					<input type="hidden" name="token" value="<?= h($_SESSION['token']) ?>">
				</div>
			</form>
		</div>
	</div>


	</div>
	<div id="content">
		<div class="content-wrap">
		</div>
	</div>
<div class="content-after">
</div>

<footer class="login_footer">
	<div id="footer-wrap">
		<div id="footer-left">
			<ul class="footer-li">
				<li><a href="#">ご利用規約</a></li>
				<li><a href="#">プライバシーポリシー</a></li>
				<li><a href="#">特定商取引に基づく表記</a></li>
				<li><a href="#">会社概要</a></li>
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
