<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<html>
<section class="text-center text-lg-start">
    <style>
        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
        .bg-utama{
        background-color: dimgray;
         background-size: cover;
         background-position: center;
         }
    </style>

    <head>
        <title>Halaman Registrasi</title>
    </head>

</html>
<body class="bg-utama">
<form action="/registeruser" method="post">
    @csrf
    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                    <div class="card-body p-5 shadow-5 text-center">
                        <h2 class="fw-bold mb-5">Register</h2>
                        
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <label class="form-tabel" for="email">Email</label>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="name" class="form-control" name="name" required/>
                            <label class="form-label" for="name">useraname</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="password" class="form-control" name="password" required/>
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <!-- <td>-->
                        <!-- <input type="submit" class="submit" value="SIMPAN"> -->
                        <!-- <input type="reset" class="batal" value="BATAL"> -->
                        </td>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                            Registrasi
                        </button>
                        <p class="login-register-text">Sudah punya akun?<a href="/login">Login</a></p>
</form>
</div>
</div>
</div>

<div class="col-lg-6 mb-5 mb-lg-0">
    <img src="{{asset('fotohewan/fla.jpeg')}}" class="w-100 rounded-4 shadow-4" alt="" />
</div>
</div>
</div>
</div>
</body>
<!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</form>