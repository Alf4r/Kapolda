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

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="navbar-1">
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0" style="justify-content: center;">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5 split">
            <img src="assets/img/logo_polisi.jpeg" style="margin-left: -44px;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav" style="margin-left: auto;">
            <li class="nav-item">
                <a class="nav-link" href="beranda_anggota.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rekapitulasi.php">Rekapitulasi</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="\form1">Formulir Laporan</a>
            </li>
        </ul>
        <div class="w3-container" style="margin-left: auto;">
            <div onclick="toggleDropdown()" class="profile-dropdown">
            <div style="margin-left: auto;display: flex;flex-wrap: wrap;border: 15px solid navy;margin: 11px;">
                    <span class="profile-name">{{ Auth::user()->name }} </span>
                </div>
        <ul id="dropdownContent" class="dropdown-content">
            <li><a href="#"><i class="mdi mdi-email-outline"></i>Messages</a></li>
            <li><a href="#"><i class="mdi mdi-account"></i>Account</a></li>
            <li><a href="#"><i class="mdi mdi-settings"></i>Settings</a></li>
            <li><a href="\logout"><i class="mdi mdi-logout"></i>Logout</a></li>
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
    </div>
    <div style="width:100%;height:400px;">
        <img class="center" src="assets/img/Lambang_Polri.png" style="display: block;margin-right: auto;margin-left: auto;margin-top: 218px;">
        <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center" style="background: rgba(247, 247, 247); opacity: 0.9; height: 129%;">
            <div class="content-container" style="position:relative;display:flex;flex-direction:column;align-items:center;width: 100%;background: rgba(247, 247, 247, 0.9);padding: 135px;margin-bottom: 641px;">
                <h2>Daftar Pengguna</h2>
                <table border="1" style="width:80%; margin-top:20px;">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>NIK</th>
                                <th>Korban</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>No. Telp</th>
                                <th>Email</th>
                                <th>Kewarganegaraan</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Pekerjaan</th>
                                <th>Alamat Lengkap</th>
                                <th>Lokasi Kejadian</th>
                                <th>Jenis Kejahatan</th>
                                <th>Kerugian</th>
                                <th>Tanggal Kejadian</th>
                                <th>Waktu Kejadian</th>
                                <th>Detail Motif</th>
                                <th>Provinsi</th>
                                <th>Kabupaten/Kota</th>
                                <th>Kecamatan</th>
                                <th>Kode Pos</th>
                                <th>Nama Ibu</th>
                                <th>Nama Bapak</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Pekerjaan Bapak</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporan as $laporan)
                                <tr>
                                    <td>{{ $laporan->nama_lengkap }}</td>
                                    <td>{{ $laporan->nik }}</td>
                                    <td>{{ $laporan->korban }}</td>
                                    <td>{{ $laporan->tempat_lahir }}</td>
                                    <td>{{ $laporan->tanggal_lahir }}</td>
                                    <td>{{ $laporan->no_telp }}</td>
                                    <td>{{ $laporan->email }}</td>
                                    <td>{{ $laporan->kewarganegaraan }}</td>
                                    <td>{{ $laporan->jenis_kelamin }}</td>
                                    <td>{{ $laporan->agama }}</td>
                                    <td>{{ $laporan->pekerjaan }}</td>
                                    <td>{{ $laporan->alamat_lengkap }}</td>
                                    <td>{{ $laporan->lokasi_kejadian }}</td>
                                    <td>{{ $laporan->jenis_kejahatan }}</td>
                                    <td>{{ $laporan->kerugian }}</td>
                                    <td>{{ $laporan->tanggal_kejadian }}</td>
                                    <td>{{ $laporan->waktu_kejadian }}</td>
                                    <td>{{ $laporan->detail_motif }}</td>
                                    <td>{{ $laporan->provinsi }}</td>
                                    <td>{{ $laporan->kabupaten }}</td>
                                    <td>{{ $laporan->kecamatan }}</td>
                                    <td>{{ $laporan->kode_pos }}</td>
                                    <td>{{ $laporan->nama_ibu }}</td>
                                    <td>{{ $laporan->nama_bapak }}</td>
                                    <td>{{ $laporan->pekerjaan_ibu }}</td>
                                    <td>{{ $laporan->pekerjaan_bapak }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>       
            </div>
        </div>
    </div>
</body>
</html>