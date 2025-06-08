<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pelayanan Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href=assets/css/login.css rel="stylesheet"> <!-- CSS eksternal -->
</head>
<body>

<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                <a href="{{ route('login') }}" class="d-flex align-items-center gap-3 text-decoration-none">
                    <img src="assets/img/LOGO KOTA DUMAI.png" alt="logokotadumai" width="75px">
                    <h5 class="sitename mb-0">SISTEM INFORMASI PELAYANAN MASYARAKAT KELURAHAN BUKIT DATUK</h5>
                </a>
                <center><h5 class="text-green">Sign in</h5></center>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" class="form-control" id="email" name="username" required value="{{ old('username') }}">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <div class="d-grid">
                            <button type="submit" class="btn btn-custom">Masuk</button>
                        </div>
                        <center><a href="{{ route('signup') }}" >Belum punya akun?</a></center>
                    </form>

                    <p class="text-center mt-3 mb-0"><small>&copy; Kelurahan Bukit Datuk</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
