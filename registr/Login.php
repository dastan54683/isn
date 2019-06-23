<?php
	session_start();
	include $_SERVER['DOCUMENT_ROOT'].'/registr/db/dbconnection.php';
		$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL)??false;
		// $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL) ? filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL) : false;
		$password = md5(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING)) ?? false;
		// $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING) ? filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING) : false;
		if($email && $password){
			$query = 'SELECT password FROM users WHERE email=?';
			$stt = $db->prepare($query);
			$stt -> bindParam(1,$email);
			$stt -> execute();
			$dbpas = $stt->fetchAll(PDO::FETCH_NUM)[0][0];
			if($dbpas == $password){
				$_SESSION['login']  = $email;
				header('location: /index.php');
			}
			else {
				echo 'Пороль не верен';
			}
		}
?>
<html>
<head>
	<title>Авторизация</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-55">
						АВТОРИЗОВАТЬСЯ
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Требуется действительный адрес электронной почты: *@gmail.com">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "необходим пароль">
						<input class="input100" type="password" name="password" placeholder="Пороль">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Запомнить меня
						</label>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							войти
						</button>
					</div>
					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Не участник?
						</span>
						<a class="txt1 bo1 hov1" href="register.php">
							зарегистрируйтесь прямо сейчас							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>