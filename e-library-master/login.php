<html>
<?php
    include('fun/connect.php');
    ?>
<head>
<?php
    include('include-des/header.php');
    ?>
	<style>
			body{background-image: url(images/banner.jpg)}
		.navbar-header {justify-content: center;}
	</style>
</head>

<body>
	 <?php
    include('include-des/menu.php');
    ?>
	<!-- login form -->
	<section class="login-form">
		<form class="box" action=" loginform.php " method="POST">
			<h1>تسجيل الدخول </h1>
			<span >اسم المستخدم</span>
			<input type="text" name="username" placeholder="Username" required>
			<span>كلمة المرور</span>
			<input type="password" name="password" placeholder="Password" required>
			<div class="remember-me">
				<input type="submit" name="submit" value="دخول " title="دخول ">
			</div>
		</form>
	</section>