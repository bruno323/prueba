<head>
	<title>Login UGEL</title>
</head>
<body>
	<div class="container_Login">
		<div class="d-flex justify-content-center">
			<div class="container_Logo">
				<img class="img_Logo"  src="<?= URL;?>/web/img/logo_ugel.jpeg">
			</div>
		</div>
		<div class="form_container">
		<form id="form_login">
				<div class="input_login_user">
					<input type="text" name="correo" id ="correo" class="form-control input_user" value="juanperez@hotmail.com" placeholder="User">
				</div>
				<div class="input_login_password">
					<input type="password" name="password" id ="password" class="form-control input_pass" value="123456" placeholder="Password">
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<input type="submit" name="button" class="btn login_btn" value= "Iniciar sesion">
				</div>
			</form>
		</div>
	</div>
</body>

