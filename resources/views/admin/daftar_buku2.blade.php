<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Buku | Perpustakaan SMA NU AL MA'RUF</title>
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
    <!-- Nucleo Icons -->
    <link href="../css/nucleo-icons.css" rel="stylesheet" />
    <link href="../css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3"
        id="sidenav-main">

        {{-- LOGO START --}}
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{ route('view.dashboard2.admin') }}" target="_blank">
                <img src="../img/SMA/logo smanual.png" class="navbar-brand-img h-100" alt="logo" width="15%"
                    height="40%">
                <span class="ms-1 fs-5 font-weight-bold">Dashboard Admin</span>
            </a>
        </div>
        {{-- LOGO END --}}

        <hr class="horizontal dark mt-0">

        {{-- SIDE NAVBAR START --}}
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  " href="{{ route('view.dashboard2.admin') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            💻
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="{{ route('view.buku.2') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            📚
                        </div>
                        <span class="nav-link-text ms-1">Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('view.siswa') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            👤
                        </div>
                        <span class="nav-link-text ms-1">Siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ route('view.pinjam.buku.2') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            📨
                        </div>
                        <span class="nav-link-text ms-1">Peminjaman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ route('view.pengembalian.buku.2') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            ⏲️
                        </div>
                        <span class="nav-link-text ms-1">Pengembalian</span>
                    </a>
                </li>
            </ul>
        </div>
        {{-- SIDE NAVBAR END --}}
    </aside>

    {{-- MAIN START --}}
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- TOP NAVBAR START -->
        <div class="d-flex justify-content-end flex-row py-2 my-2 mx-3">
            <form action={{ route('logout') }} method="POST">
                @csrf
                <button type="submit" value="logout" class="btn btn-danger">Keluar</button>
            </form>
        </div>
        <!-- TOP NAVBAR END -->

        {{-- MIDDLE START --}}
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Daftar Buku</h6>

                            <div class="row">
                                <div class="col-2">
                                    <a class="btn btn-primary mb-2" href="{{ route('view.tambah.buku.2') }}">Tambah
                                        Buku</a>
                                </div>


                                <div class="col-2">
                                    <form action="#" method="get">
                                        <div class="input-group mb-3">
                                            {{-- TODO: pencarian --}}
                                        </div>
                                    </form>
                                </div>

                                <div class="col-8">
                                    <div class="row justify-content-end">
                                        <div class="col-6">
                                            <form action="#" method="get">
                                                <div class="input-group mb-3">
                                                    {{-- <input type="text" class="form-control fw-bold"
                                                        placeholder="Cari pagawai..." name="search_pegawai"
                                                        value="{{ request('search_pegawai') }}"> --}}
                                                    {{-- <button class="btn btn-primary" type="submit">Temukan</button> --}}
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                @if ($buku->isNotEmpty())
                                    </table>
                                    <table class="table table-striped table-hover align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-start text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                                    No.</th>
                                                <th
                                                    class="text-start text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                                    Nama Buku</th>
                                                <th
                                                    class="text-start text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                                    Nama Pengarang</th>
                                                <th
                                                    class="text-start text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                                    Penerbit</th>
                                                <th
                                                    class="text-start text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                                    Tahun Terbit</th>
                                                <th
                                                    class="text-end text-uppercase text-dark text-xs font-weight-bolder  ps-2">
                                                    Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($buku as $pgl)
                                                <tr>
                                                    <td class="text-center text-dark font-weight-bold">
                                                        {{ $loop->index + 1 }}</td>
                                                    <td class="text-start text-dark font-weight-bold">
                                                        {{ $pgl->nama_buku }}</td>
                                                    <td class="text-start text-dark font-weight-bold">
                                                        {{ $pgl->pengarang }}</td>
                                                    <td class="text-start text-dark font-weight-bold">
                                                        {{ $pgl->penerbit }}</td>
                                                    <td class="text-start text-dark font-weight-bold">
                                                        {{ $pgl->tahun_terbit }}</td>
                                                    <td class="text-end">
                                                        <a class="btn btn-warning btn-sm text-dark"
                                                            style="color: #F6F5FC"
                                                            href="{{ route('view.edit.buku.2', $pgl->id) }}">🔍
                                                            Edit</a>
                                                        <form action={{ route('hapus.buku', $pgl->id) }}
                                                            method="POST">
                                                            @csrf
                                                            <button class=" btn btn-danger btn-sm">
                                                                <i class="fa fa-trash"></i>
                                                                Hapus
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <div>
                                                <p class="card-text">Buku Tidak Ada!</p>
                                            </div>
                                @endif
                                </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end">
                                {{-- {{ $buku->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- MIDDLE END --}}

            {{-- FOOTER START --}}
            <footer class="footer pt-3 mt-auto fixed-bottom">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-0">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                <p>
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    © Perpustakaan SMA NU AL MA'RUF
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            {{-- FOOTER END --}}

        </div>
    </main>
</body>

</html>
