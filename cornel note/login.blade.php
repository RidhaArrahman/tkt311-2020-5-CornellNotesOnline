<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style_login_regis.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<div class="infinity-container">
		<!-- FORM CONTAINER BEGIN -->
		<div class="infinity-form-block">
			<div class="infinity-click-box text-center">Masuk ke akun anda</div>

			<div class="infinity-fold">
				<div class="infinity-form">
					<form class="form-box">
						<!-- Input Box -->
						<div class="form-input">
							<span>
								<i class="fa fa-envelope"></i>
							</span>
							<input type="email" name="" placeholder="Alamat Email" tabindex="10" required>
						</div>
						<div class="form-input">
							<span>
								<i class="fa fa-lock"></i>
								<i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
							</span>
							<input type="Password" placeholder="Kata sandi" id="password" required>
						</div>
						<div class="row mb-2">
							<!--Remember Checkbox -->
							<div class="col-6 d-flex align-items-center">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1">
									<label class="custom-control-label text-sm" for="cb1">Ingat saya
									</label>
								</div>
							</div>
							<!-- Forget Password -->
							<div class="col-6 text-right text-sm">
								<a href="forget.html" class="forget-link">Lupa kata sandi?</a>
							</div>
						</div>
						<!-- Login Button -->
						<div class="col-12 px-0 text-right">
							<button type="submit" class="btn mb-3">Masuk</button>
						</div>
						<div class="text-center">Tidak mempunyai akun?
							<a class="register-link" href="regis.html">Daftar disini</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- FORM CONTAINER END -->
	</div>	
	<script>
		var state= false;
		function toggle(){
			if(state){
				document.getElementById("password").setAttribute("type","password");
				document.getElementById("eye").style.color='#7a797e';
				state = false;
			}
			else{
				document.getElementById("password").setAttribute("type","text");
				document.getElementById("eye").style.color='#5887ef';
				state = true;
			}
		}
	</script>
</body>

</html>
