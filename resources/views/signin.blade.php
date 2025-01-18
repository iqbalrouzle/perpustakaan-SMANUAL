<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan SMA NU AL MA'RUF | Sign In</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/SMA/logo smanual.png" type="image/x-icon">
    <!-- Custom styles -->
    {{-- <link rel="stylesheet" href="./css/style.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        body {
            /* background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b); */
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div class="layer"></div>
    <main class="page-center"
        style="background-image: url('{{ asset('img/SMA/halaman.jpg') }}'); background-size: cover">
        <article class="sign-up">
            <form class="sign-up-form form" action="{{ route('login') }}" method="POST">
                @csrf
                @if (session('error'))
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <label class="form-label-wrapper">
                    <h1 class="sign-up__title">LOGIN</h1>
                    <p class="sign-up__subtitle ">Masukkan data yang sudah didaftarkan</p>

                    <p class="form-label">Email</p>
                    <input class="form-input" type="email" placeholder="Enter your email" name="email" required>
                </label>
                <label class="form-label-wrapper">
                    <p class="form-label">Password</p>
                    <input class="form-input" type="password" placeholder="Enter your password" name="password"
                        required>
                </label>
                {{-- <label class="form-checkbox-wrapper">
                    <input class="form-checkbox" type="checkbox" required>
                    <span class="form-checkbox-label">Remember me next time</span>
                </label> --}}
                <button class="form-btn primary-default-btn transparent-btn">Login</button>
                {{-- <a class="link-info forget-link" href="{{ route('signup') }}">Register</a> --}}
            </form>

        </article>
    </main>
    <!-- Chart library -->
    <script src="./plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>
</body>

</html>
