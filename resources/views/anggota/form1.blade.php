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
                <a class="nav-link" href="\formulir1">Formulir Laporan</a>
            </li>
        </ul>
        <div class="w3-container" style="margin-left: auto;">
            <div onclick="toggleDropdown()" class="profile-dropdown" style="margin-left: auto;display: flex;">
                <img src="https://cdn0.iconfinder.com/data/icons/avatars-3/512/avatar_hipster_guy-512.png" class="navbar-brand d-flex align-items-center px-4 px-lg-5 split">
                <div style="display: flex;flex-wrap: wrap;align-content: center;">
                <span class="profile-name">{{ Auth::user()->name }} </span>
                </div>
        <ul id="dropdownContent" class="dropdown-content">
            <li><a href="#"><i class="mdi mdi-email-outline"></i>Messages</a></li>
            <li><a href="#"><i class="mdi mdi-account"></i>Account</a></li>
            <li><a href="#"><i class="mdi mdi-settings"></i>Settings</a></li>
            <li><a href="logout.php"><i class="mdi mdi-logout"></i>Logout</a></li>
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
    <div class="w3-container" style="display:flex;flex-wrap:wrap;margin:56px">
        <img class="center" src="assets/img/Lambang_Polri.png" style="display: flex;margin-right: auto;margin-left: auto;margin-top: 218px;">
        <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center" style="justify-content:center;background: rgba(247, 247, 247); opacity: 0.9; height: 129%;">
        <fieldset style="display:flex; justify-content:center;">
    <div style="display:flex;">
        <form action="\form2" method="GET" style="display: flex;flex-wrap: wrap;">
            <legend style="display:flex; justify-content:center; -webkit-text-stroke-width:thin; margin-bottom:52px;">FORMULIR LAPORAN</legend>
                <div style="display: flex;flex-wrap: wrap;flex-direction: column;">
                    <div style="display: flex;flex-direction: row;justify-content: space-between;">
                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="fname">Nama Lengkap</label>
                            <input type="text" id="fname" name="fname" style="width: 350px;">
                        </div>
                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="lname">No.NIK</label>
                            <input type="text" id="lname2" name="lname" style="width: 194px;">
                        </div>
                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="phone">Korban</label>
                            <input id="phone" type="tel" name="phone" style="width: 300px;">
                        </div> 
                    </div>
                    <div class="item" style="display: flex;flex-direction: row;justify-content: space-between;">

                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="street">Tempat Lahir</label>
                            <input id="street" type="text" name="street" style="width: 210px;">
                        </div>

                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="tanggal">Tanggal Lahir</label>
                            <input id="tanggal" type="date" name="tanggal" style="width: 180px;" />
                        </div>

                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="tel">No.Telp.</label>
                            <input id="tel" type="text" name="tel" style="width: 180px;" >
                        </div>

                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="email">Email</label>
                            <input id="email" type="text" name="email" style="width: 250px;" >
                        </div>
                    </div>
                    <div class="item" style="display: flex;flex-direction: row;justify-content: space-between; align-items: center;">            
                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="nationality">Kewarganegaraan</label>
                            <select id="nationality" name="nationality">
                                <option value="">Pilih Kewarganegaraan</option>
                                <option value="volvo">Volvo</option>
                                <option value="toyota">Toyota</option>
                                <option value="bmw">BMW</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
    
                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="gender" style="width: 200px;">Jenis Kelamin</label>
                            <select id="gender" name="gender">
                                <option value="">pilih jenis kelamin</option>
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                            </select>
                        </div>
    
                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="religion">Agama:</label>
                            <select id="religion" name="religion" style="width: 184px;">
                                <option value="">pilih agama</option>
                                <option value="islam">Islam</option>
                            </select>
                        </div>

                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="occupation">Pekerjaan</label>
                            <input id="occupation" type="text" name="occupation" style="width: 281px;" >
                        </div>
                    </div>

                    <div class="item" style="display: flex;flex-direction: row;justify-content: space-between; align-items: center;">
                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="address">Alamat Lengkap</label>
                            <textarea id="address" name="message1" rows="4" cols="50"></textarea>
                        </div>

                        <div style="display: flex;flex-direction: column; margin: 0 10px;">
                            <label for="incidentLocation">Lokasi Kejadian</label>
                            <textarea id="incidentLocation" name="message2" rows="4" cols="50"></textarea>
                        </div>
                    </div>
                    <div class="item" style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;">
                        <div style="display: flex; flex-direction: column; margin: 0 10px;">
                            <label for="crimeType">Jenis Kejahatan:</label>
                            <select id="crimeType" name="crimeType" style="width: 300px;">
                                <option value="">pilih jenis kejahatan</option>
                                <option value="">Volvo</option>
                                <option value="">Toyota</option>
                                <option value="">BMW</option>
                                <option value="">Audi</option>
                            </select>
                        </div>

                    <div style="display: flex; flex-direction: column; margin: 0 10px;">
                        <label for="loss">Kerugian</label>
                        <select id="loss" name="loss" style="width: 204px;">
                            <option value="">pilih kerugian</option>
                            <option value="">Volvo</option>
                            <option value="">Toyota</option>
                            <option value="">BMW</option>
                            <option value="">Audi</option>
                        </select>
                    </div>

                    <div style="display: flex; flex-direction: column; margin: 0 10px;">
                        <label for="incidentDate">Tanggal Kejadian</label>
                        <input type="date" id="incidentDate" name="tanggal" style="width:155px" />
                    </div>

                    <div style="display: flex; flex-direction: column; margin: 0 10px;">
                        <label for="incidentTime">Waktu Kejadian</label>
                        <input id="incidentTime" type="text" name="city" style="width: 189px;" >
                    </div>
                </div>


                <div class="item" style="display: flex;flex-direction: row;justify-content: center;">
                    <div style="display: flex;flex-direction: column;margin-right: 10px;">
                        <label for="provinsi">Detail Lokasi Kejadian:</label>
                        <select id="provinsi" name="provinsi">
                            <option value="">Provinsi</option>
                            <option value="Volvo">Volvo</option>
                            <option value="Toyota">Toyota</option>
                            <option value="BMW">BMW</option>
                            <option value="Audi">Audi</option>
                            </select>
                    </div>

                    <div style="display: flex;flex-direction: column;margin-right: 10px;">
                        <label for="kabupaten" style="visibility: hidden;">Dummy</label> <!-- Menggunakan visibility hidden agar elemen tetap memakan tempat tetapi tidak terlihat -->
                        <select id="kabupaten" name="kabupaten">
                            <option value="">Kabupaten/kota</option>
                            <option value="Volvo">Volvo</option>
                            <option value="Toyota">Toyota</option>
                            <option value="BMW">BMW</option>
                            <option value="Audi">Audi</option>
                        </select>
                    </div>

                    <div style="display: flex;flex-direction: column;margin-right: 10px;">
                        <label for="detailMotif">Detail Motif kejadian</label>
                        <textarea id="detailMotif" name="message1" rows="2" cols="60" style="width: 579px;height: 63px;"></textarea>
                    </div>
                </div>


                <div style="display: flex;flex-direction: row;justify-content: flex-start;">
                    <select id="kecamatan" name="kecamatan" style="margin-left: 11px;width: 166px;">
                        <option value="">Kecamatan</option>
                        <option value="Volvo">Volvo</option>
                    </select>

            <label for="kabupaten" style="visibility: hidden;margin-left: 2px;">a</label>
            <input id="kodepos" type="text" name="kodepos" style="width: 143px;" placeholder="kode pos" >
                    </div>
            </select>
            <div style="display: flex; justify-content: center; margin-top: 20px;">
            <button style="margin-left: 104px;">Selanjutnya</button>
        </form>
    </div>
        
</body>
</html>