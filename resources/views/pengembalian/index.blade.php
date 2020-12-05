<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Peminjaman Barang - Sarpras</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eNno - v2.1.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero2" class="d-flex align-items-center">

        <div class="container">
            <form action="{{ route('action') }}" method="POST">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-12 pt-5 order-lg-1 d-flex flex-column justify-content-center">
                        <center>
                            <h2>FORM PENGEMBALIAN</h2>
                        </center>
                        <br>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="width:180px" for="inputGroupSelect01">ID
                                    Pinjam</label>
                            </div>
                            <select class="custom-select" name="id" id="inputGroupSelect01">

                                @foreach($pinjams as $key)
                                <option value="{{ $key->id }}">{{$key->id}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="width:180px" for="inputGroupSelect01">Nama
                                    Pengembali</label>
                            </div>
                            <input type="text" class="form-control" name="nama" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="width:180px" for="inputGroupSelect01">Kelas
                                    Pengembali</label>
                            </div>
                            <input type="text" class="form-control" name="kelas" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <button type="submit" class="btn btn-primary"><i>Simpan</i></button>
                    </div>
                </div>
            </form> 
            <table class='table table-bordered table-stripped' style="margin-top:20px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pinjam</th>
                        <th>Nama Peminjam</th>
                        <th>Kelas Peminjam</th>
                        <th>Ruangan Peminjam</th>
                        <th>ID Barang</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach($pinjams as $p)
                    <tr align="center">
                        <td>{{ $i++ }}</td>
                        <td>{{$p->id }}</td>
                        <td>{{$p->nama_peminjam}}</td>
                        <td>{{$p->kelas_peminjam}}</td>
                        <td>{{$p->ruangan_peminjam}}</td>
                        <td>{{$p->id_barang}}</td>
                        <td>{{$p->status}}</td>
                        <td>{{$p->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section><!-- End Hero -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
