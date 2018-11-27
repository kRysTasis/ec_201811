<?php

require_once(__DIR__ . '/../config/config.php');

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
	<header>

		<div class="header-wrap">
		<div id="signup_header">

		<div class="signup_header_logo">
		<div class="logo"><a href="index.php"><h1>Sample Store</h1><h2>Online store</h2></a></div>
		<div class="logo3"><img src="image/logo4.jpg" width="45px" height="42px"></div>
		</div>
		</div>
		</div>
	</header>

	<div class="sign_up_form_wrap">
		<div class="sign_up_form">
			<form method="post" action="#" name="signup" id="signup">

				<div class="sign_up_form_center">
				<h1></h1>
				<p>ユーザー登録ありがとうございます。</p>
				<p><?php echo $_SESSION['email']; ?>宛てに確認メールを送りしました。</p>
				<p>ご確認の上、本登録をお願いします。</p>
				<p class="from_to">既にアカウントをお持ちの方はこちらから <a href="login.php">ログイン</a></p>
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

<footer>
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
			<small><p><img src="image/footlogo.jpg" width="25px" height="22px;">Sample Store</p>Copyright©️ 2018 Sample Store All Rights Reserved.</small>
		</div>
	</div>
</footer>
</div>
</body>
</html>
