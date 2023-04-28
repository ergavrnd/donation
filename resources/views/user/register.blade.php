<!doctype html>
<html lang="en">
  <head>
  	<title>Registrasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="auth/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(auth/images/vian.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Registrasi</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">

		      	<form action="/register" method="POST" class="signin-form">
                    @csrf
                    <input type="hidden" name="otp" value="{{ @rand(100000, 999999) }}">
		      		<div class="form-group">
		      			<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama lengkap" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback"></div>
                            <small class="text-danger" style="font-size: 11px">{{ $message }}</small>
                        @enderror
		      		</div>
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback"></div>
                            <small class="text-danger" style="font-size: 11px">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Nama pengguna" required value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback"></div>
                            <small class="text-danger" style="font-size: 11px">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password-field" type="password" name="password" class="form-control @error('username') is-invalid @enderror" placeholder="Password" required>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        @error('password')
                            <div class="invalid-feedback"></div>
                            <small class="text-danger" style="font-size: 11px">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password-field2" type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi password" required>
                        <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Registrasi akun</button>
                    </div>
            </form>

            <div class="form-group d-md-flex justify-content-end">
                <div class="w-50">
                    <label class="checkbox-wrap checkbox-primary"><a href="/login" style="color: #fff" tittle="Masuk SekarangA">Sudah punya akun</a></label>
                </div>
                <div class="w-50 text-md-right">
                    <a href="#" style="color: #fff">Forgot Password</a>
                </div>
            </div>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="auth/google" class="px-2 py-2 mr-md-1 rounded" style="background-color: #dd4b39;"><span class="ion-logo-facebook mr-2"></span> Google</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="auth/js/jquery.min.js"></script>
  <script src="auth/js/popper.js"></script>
  <script src="auth/js/bootstrap.min.js"></script>
  <script src="auth/js/main.js"></script>

	</body>
</html>

