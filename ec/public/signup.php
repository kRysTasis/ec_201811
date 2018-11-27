<?php

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Signup();

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
	<header class="signup_header">
		<div class="header-wrap">
			<a href="index.php"><h1>I love Hamilton</h1></a>
		</div>
	</header>

	<div class="sign_up_form_wrap">
		<div class="sign_up_form">


			<form method="post" action="" name="signup" id="signup_form">
				<div class="sign_up_form_center">
				<h1>Create Account</h1>
				<h2>Email</h2>
					<input type="email" name="email" id="email" placeholder="Enter Email" required>
					<p class="err"><?= h($app->getErrors('email')); ?></p>
				<h2>User</h2>
					<input type="text" name="username" id="username" pattern="^[a-zA-Z0-9\s\t]*$" placeholder="Enter Username" required>
					<p class="err"><?= h($app->getErrors('username')); ?></p>
				<h2>Password</h2>
					<input type="password" name="password" id="password" placeholder="Enter Password" pattern="^[0-9]{4,}$" required>
					<p>※Password must be 4 or more charactors</p>
				<h2>Password Comfirm</h2>
					<input type="password" name="password_comfirm" id="password_comfirm" placeholder="Enter Password Again" required>
				<input type="submit" name="submit" id="submit" value="Create User">
				<p class="from_to">Already Have An Account? <a href="login.php">LOG IN</a></p>
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

<footer class="signup_footer">
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
  				<li><a href="https://www.fa	cebook.com"></a></li>
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
