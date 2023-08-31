<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard </title>
    <meta charset="utf-8">
    <title>BID TIK POLDA METRO JAYA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/foto_empJAKPUSK.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap JS and Popper.js (required for dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-"></script>
    <script type="text/javascript" src="https://public.tableau.com/javascripts/api/viz_v1.js"></script>

    <style>
        .profile-dropdown {
            cursor: pointer;
            background-color: navy;
            color: white;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            list-style-type: none;
            padding: 0;
            margin-top: 8px;  /* penyesuaian margin supaya sedikit berjarak dari kotak profil */
            right: 0;
            width: 200px;
            z-index: 99;
            top: 100%;  /* Sejajarkan ke bagian bawah .profile-dropdown */
            border-radius: 8px; 
        }

        .dropdown-content li a {
            padding: 10px;
            display: block;
            text-decoration: none;
        }

        .dropdown-content li a:hover {
            background-color: #eee;
        }

        .show {
            display: block;
        }
        #vizContainer {
            width: 100%;
            max-width: 800px; /* Sesuaikan dengan preferensi Anda */
            margin: 0 auto;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .modal-toggle:checked + .modal {
            display: block;
        }


    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0" style="justify-content: center;">
        <a href="/dashboard_at" class="navbar-brand d-flex align-items-center px-4 px-lg-5 split">
            <img src="assets/img/logo_polisi.jpeg" style="margin-left: -44px;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/beranda_at">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Komparasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/polres_bandara">Polres Bandara Inter. Soetta</a>
                        <a class="dropdown-item" href="/polres_bekasi">Polres Bekasi</a>
                        <a class="dropdown-item" href="/polres_">Polres Depok</a>
                        <a class="dropdown-item" href="/polres_jakbar">Polres Jakarta Barat</a>
                        <a class="dropdown-item" href="/polres_jakpus">Polres Jakarta Pusat</a>
                        <a class="dropdown-item" href="/polres_jaksel">Polres Jakarta Selatan</a>
                        <a class="dropdown-item" href="/polres_jaktim">Polres Jakarta Timur</a>
                        <a class="dropdown-item" href="/polres_jakut">Polres Jakarta Utara</a>
                        <a class="dropdown-item" href="/polres_kota_bekasi">Polres Kota Bekasi</a>
                        <a class="dropdown-item" href="/polres_kota_tangerang">Polres Kota Tangerang</a>
                        <a class="dropdown-item" href="/polres_kp_seribu">Polres Kp. Seribu</a>
                        <a class="dropdown-item" href="/polres_tangsel">Polres Tangerang Selatan</a>
                        <a class="dropdown-item" href="/polres_tj_priok">Polres Tj. Priok</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="\List">List Laporan</a>
                </li>
            </ul>
        <div class="w3-container" style="margin-left: auto;">
            <div onclick="toggleDropdown()" class="profile-dropdown" style="margin-left: auto;display: flex;">
                <div style="margin-left: auto;display: flex;flex-wrap: wrap;border: 15px solid navy;margin: 11px;">
                    <span class="profile-name">{{ Auth::user()->name }} </span>
                </div>
        <ul id="dropdownContent" class="dropdown-content">
            <li><a href="/logout"><i class="mdi mdi-logout"></i>Logout</a></li>
        </ul>
    </div>
    </nav>
    <script>
        $(document).ready(function(){
            $('.profile-dropdown').click(function(event){
                event.stopPropagation();
                $('.dropdown-content').toggle(); 
            });

            // Jika user mengklik di luar dropdown, maka tutup dropdown
            $(document).click(function(){
                $('.dropdown-content').hide();
            });
        });
    </script>
     <div style="width:100%;height:400px;">
        <img class="center" src="assets/img/Lambang_Polri.png"
            style="display: block;margin-right: auto;margin-left: auto;margin-top: 218px;">
            <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center"
            style="background: rgba(247, 247, 247); opacity: 0.9; height: 129%;">
            <div class="content-container"
                style="position:relative;display:flex;flex-direction:column;align-items:center;width: 100%;background: rgba(247, 247, 247, 0.9);padding: 135px;margin-bottom:300px;">
                <h2>Daftar Laporan</h2>
                <div class="table-responsive">
                    <table class="table table-hover myTable">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>NIK</th>
                                <th>Korban</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>No. Telp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporan as $e=>$laporan)
                            <tr>
                                <td>{{ $laporan->nama_lengkap }}</td>
                                <td>{{ $laporan->nik }}</td>
                                <td>{{ $laporan->korban }}</td>
                                <td>{{ $laporan->tempat_lahir }}</td>
                                <td>{{ $laporan->tanggal_lahir }}</td>
                                <td>{{ $laporan->no_telp }}</td>
                                <td>
                                    <label for="modal-toggle-{{ $e }}" class="btn btn-primary btn-sm btn-detail">Lihat Detail</label>
                                    <input type="checkbox" id="modal-toggle-{{ $e }}" class="modal-toggle">
                                    <div class="modal">
                                        <div class="modal-content">
                                            <label for="modal-toggle-{{ $e }}" class="close-btn">&times;</label>
                                            <ul>
                                                <li>Nama Lengkap: {{ $laporan->nama_lengkap }}</li>
                                                <li>{{ $laporan->email }}</li>
                                                <li>{{ $laporan->kewarganegaraan }}</li>
                                                <li>{{ $laporan->jenis_kelamin }}</li>
                                                <li>{{ $laporan->agama }}</li>
                                                <li>{{ $laporan->pekerjaan }}</li>
                                                <li>{{ $laporan->alamat_lengkap }}</li>
                                                <li>{{ $laporan->lokasi_kejadian }}</li>
                                                <li>{{ $laporan->jenis_kejahatan }}</li>
                                                <li>{{ $laporan->kerugian }}</li>
                                                <li>{{ $laporan->tanggal_kejadian }}</li>
                                                <li>{{ $laporan->waktu_kejadian }}</li>
                                                <li>{{ $laporan->detail_motif }}</li>
                                                <li>{{ $laporan->provinsi }}</li>
                                                <li>{{ $laporan->kabupaten }}</li>
                                                <li>{{ $laporan->kecamatan }}</li>
                                                <li>{{ $laporan->kode_pos }}</li>
                                                <li>{{ $laporan->nama_ibu }}</li>
                                                <li>{{ $laporan->nama_bapak }}</li>
                                                <li>{{ $laporan->pekerjaan_ibu }}</li>
                                                <li>{{ $laporan->pekerjaan_bapak }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')

    <script type="text/javascript">
    $(document).ready(function () {
    $('.myTable').DataTable();
    });
    </script>