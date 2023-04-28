<!doctype html>
<html lang="en">
    <head>
        <title>Login 10</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="auth/css/style.css">

    </head>
	<body class="img js-fullheight" style="background-image: url(auth/images/vian.jpg);">
        <section class="ftco-section">
            <div class="container">
                @if (session()->has('success'))
                    <div class="row justify-content-center">
                        <div class="alert alert-success alert-dismissible fade show col-lg-6 text-center d-flex justify-content-center" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="row justify-content-center">
                        <div class="alert alert-danger alert-dismissible fade show col-lg-6 text-center d-flex justify-content-center" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                @if (session()->has('verifikasi'))
                <div class="row justify-content-center">
                    <div class="alert alert-danger alert-dismissible fade show col-lg-10 text-center d-flex justify-content-center" role="alert">
                        {{ session('verifikasi') }}
                        <a href="/verifikasi" style="color: black; text-decoration: #093199">&nbsp; Verifikasi sekarang</a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif

                @if (Session::has('message'))
                    <div class="row justify-content-center">
                        <div class="alert alert-success alert-dismissible fade show col-lg-6 text-center d-flex justify-content-center" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Masuk</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0">

                            <form action="/login" method="POST" class="signin-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Nama pengguna" required>
                                    @error('username')
                                        <div class="invalid-feedback"></div>
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    @error('password')
                                        <div class="invalid-feedback"></div>
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Masuk</button>
                                </div>
                            </form>

                            <div class="form-group d-md-flex justify-content-end">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary"><a href="/register" style="color: #fff" title="Daftar sekarang!">Belum punya akun</a></label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="/lupapassword" style="color: #fff">Lupa Password</a>
                                </div>
                            </div>
                            <p class="w-100 text-center">&mdash; atau masuk dengan &mdash;</p>
                            <div class="social d-flex text-center">
                                <a href="auth/google" class="px-2 py-2 mr-md-1 rounded" style="background-color: #dd4b39"><span class="ion-logo-facebook mr-2"></span> Google</a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	</body>
</html>

