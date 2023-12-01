<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>作业提交系统登陆界面</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<style type="text/css">
@import url("style1.css");
</style>
</head>
<body>

<div class="container right-panel-active">

			<!-- Sign Up -->
			<div class="container__form container--signup">
				<form action="zc.php" class="form" id="form1" method="post" type="submit">
					<h2 class="form__title">注册</h2>
					<input type="text" placeholder="学号" class="input" id="username" required="required" name="username">
					<input type="email" placeholder="邮箱" class="input" id="email" required="required" name="email">
					<input type="password" placeholder="密码" class="input" id="password" required="required" name="password">
					<input type="submit" class="btn" value="注册">
				</form>
			</div>
			<!-- Sign In -->
			<div class="container__form container--signin">
				<form action="dl.php" class="form" id="form2" method="post" type="submit">
					<h2 class="form__title">登录</h2>
					<input type="email" placeholder="邮箱" class="input" required="required" id="email" name="email">
					<input type="password" placeholder="密码" class="input" required="required" id="password" name="password">
					<input type="submit" class="btn" value="登录"></inputbutton>
				</form>
                <?php
                $err = isset($_GET["err"]) ? $_GET["err"] : "";
                if($err==1){
                    echo "<script>alert('账号或密码错误')</script>";
                } ?>
			</div>

			<!-- Overlay -->
			<div class="container__overlay">
				<div class="overlay">
					<div class="overlay__panel overlay--left">
						<button class="btn" id="signIn">登录</button>
					</div>
					<div class="overlay__panel overlay--right">
						<button class="btn" id="signUp">注册</button>
					</div>
				</div>
			</div>
		</div>
<!-- partial -->
  <script  src="./script.js"></script>
</body>
</html>
