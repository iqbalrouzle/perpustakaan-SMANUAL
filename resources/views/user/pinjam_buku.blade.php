<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Buku | Perpustakaan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ URL::asset('./img/SMA/logo smanual.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ URL::asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Perpustakaan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ URL::asset('img/user.jpg') }}" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Selamat Datang, {{ $user->name }}</h6>
                        <span>User</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboard.user2') }}" class="nav-item nav-link"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ route('view.buku2') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Buku</a>
                    <a href="{{ route('view.pinjam.buku2') }}" class="nav-item nav-link active"><i
                            class="fa fa-keyboard me-2"></i>Peminjaman</a>
                    <form action={{ route('logout') }} method="POST">
                        @csrf
                        <button class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Daftar Buku</h6>
                    </div>
                    @if ($peminjaman->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-white">
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Buku</th>
                                        <th scope="col">Nama Pengarang</th>
                                        <th scope="col">Penerbit</th>
                                        <th scope="col">Tahun Terbit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($peminjaman as $pmj)
                                            <td class="text-center text-dark font-weight-bold">
                                                {{ $loop->index + 1 }}</td>
                                            <td class="text-start text-dark font-weight-bold">
                                                {{ $pmj->book_id }}</td>
                                            <td class="text-start text-dark font-weight-bold">
                                                {{ $pmj->tanggal_peminjaman }}</td>
                                            <td class="text-start text-dark font-weight-bold">
                                                {{ $pmj->tanggal_pengembalian }}</td>
                                            <td class="text-start text-dark font-weight-bold">
                                                {{ $pmj->denda }}</td>
                                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            @else
                <div>
                    <p class="card-text">Peminjaman Tidak Ada!</p>
                </div>
                @endif <i class="fa fa-life-bouy" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <!-- Footer End -->


    <!-- Sale & Revenue Start -->
    <!-- Sale & Revenue End -->


    <!-- Sales Chart Start -->
    <!-- Sales Chart End -->


    <!-- Recent Sales Start -->
    <!-- Recent Sales End -->


    <!-- Widgets Start -->
    <!-- Widgets End -->


    <!-- Footer Start -->
    <!-- Footer End -->

    <!-- Content End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset('lib/chart/chart.min.js') }}"></script>
    <script src="{{ URL::asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ URL::asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ URL::asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ URL::asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ URL::asset('js/main.js') }}"></script>
</body>

</html>
