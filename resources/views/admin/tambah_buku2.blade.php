<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Buku | Perpustakaan SMA NU AL MA'RUF</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/SMA/logo smanual.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--===============================================================================================-->
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/soft-ui-dashboard.css?v=1.0.5') }}" rel="stylesheet" />
</head>

<body style="background-color: #03051e;">
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="btn btn-danger ms-2 m-1" style="float: left" href="{{ route('view.buku.2') }}">Batal</a>
        </div>
    </nav>

    <main class="main-content mt-0">
        <section class="min-vh-200 mb-3">
            <div class="page-header align-items-start min-vh-100 pt-5 pb-10 m-4 mx-5 border-radius-lg"
                style="background-image: url('{{ asset('img/SMA/halaman.jpg') }}')">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center mx-auto">
                            <h1 class="text-white mt-5">Tambah Buku</h1>
                            <p class="text-lead text-white mb-5">Silakan isi data buku berikut ini!</p>
                            <div class="container">
                                <div class="row mt-lg-n1 mt-md-n11 mt-n10">
                                    <div class="col-xl-10 col-lg-5 col-md-7 mx-auto">
                                        <div class="card z-index-0">
                                            <div class="card-header text-center pt-4">
                                                <h5>Buku Baru</h5>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ route('tambah.buku') }}" autocapitalize="off"
                                                    autocomplete="on" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @if (session('error'))
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    @if (Session::has('success'))
                                                        <div class="alert alert-success text-white">
                                                            {{ Session::get('success') }}
                                                        </div>
                                                    @endif
                                                    @if (Session::has('error'))
                                                        <div class="alert alert-danger text-white">
                                                            {{ Session::get('error') }}
                                                        </div>
                                                    @endif

                                                    <div class="mb-3">
                                                        <label for="nama_buku" class="form-label fs-6">Nama Buku
                                                            <span class="fw-bold" style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="nama_buku"
                                                            autofocus required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="pengarang" class="form-label fs-6">Pengarang<span
                                                                class="fw-bold" style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="pengarang"
                                                            required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="penerbit" class="form-label fs-6">Penerbit<span
                                                                class="fw-bold" style="color: red">*</span></label>
                                                        <input type="text" class="form-control" name="penerbit"
                                                            required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun_terbit" class="form-label fs-6">Tahun
                                                            terbit</label>
                                                        <input type="date" class="form-control" name="tahun_terbit">
                                                    </div>
                                                    <div class="form-text text-dark"><span class="fw-bold"
                                                            style="color: red">*</span> Wajib diisi!</div>
                                                    <button type="submit" value="submit"
                                                        class="btn bg-gradient-dark w-100 my-4 mb-2 ms-2 m-1"
                                                        name="submit">Tambah</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
