<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07d74fac69.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div class="container-fluid">
        <!-- ===================== navbar ================================ -->
        <div class="row p-1">
            <div class="col-sm-2 d-flex justify-content-center align-items-center">
                <big class="baru">NIRWANA</big>
            </div>

            <div class="col-sm-9 d-flex">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text btn btn-primary border-0 ml-1" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light p-0 ml-2">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active px-4" href="#">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link px-4" href="#">Features</a>
                            <a class="nav-item nav-link px-4" href="#">Pricing</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-sm-1 d-flex justify-content-around align-items-center ganti">
                <i class="fa-solid fa-bell fa-shake mr-2"></i>
                <a href="#">
                    <img src="https://th.bing.com/th/id/OIP.9nyTpzPgpvxBs2vYCYxytgHaG0?pid=ImgDet&rs=1" alt="avatar" class="rounded-circle me-1" width="35">
                </a>
            </div>

        </div>
        <!-- =================================================================== -->
        <div class="collapse navbar-collapse responsive" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <li class="nav-item"><a class="btn" href="#">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="btn" href="#">Features</a></li>
                <li class="nav-item"><a class="btn" href="#">Pricing</a></li>
                <hr>
                <div class="promosi container text-center rounded">
                    <h6>dapatkan</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus autem sapiente quo, dolor molestias similique possimus doloremque facilis amet iste odit consequuntur atque rerum quam deserunt consequatur sit dignissimos error.</p>
                </div>
                <div class="profil2 container-fluid mt-4">
                    <div class=" d-flex align-items-center">
                        <a href="#">
                            <img src="https://th.bing.com/th/id/OIP.9nyTpzPgpvxBs2vYCYxytgHaG0?pid=ImgDet&rs=1" alt="avatar" class="rounded-circle me-1" width="35">
                        </a>
                        <big class="nama">Agung nurdiansyah</big>
                    </div>
                </div>
            </div>

            <div class="container-fluid row mt-3 responsive2">
                <div class="col-sm-8 p-2">profil</div>
                <div class="col-sm-4 p-2">history</div>
                <div class="w-100"></div>
                <div class="col-sm-8 p-2">my likes</div>
                <div class="col-sm-4 p-2">room preference</div>
                <div class="w-100"></div>
                <div class="col-sm-8 p-2">buy option</div>
                <div class="col-sm-4 p-2">account settings</div>
            </div>
            <hr>
            <div class="navbar-nav pb-3">
                <li class="nav-item"><a class="btn" href="#">sigin out</a></li>
            </div>
        </div>


        <table class="table data">
            <thead>
                <tr>
                    <th>Tipe Kamar</th>
                    <th>Muat</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-3">Kamar Deluxe Double</td>
                    <td>2 Dewasa + 1 Anak </td>
                    <td><button class="input-group-text btn border-0"><a href="#double">Detail</a></button></td>
                </tr>
                <tr>
                    <td>Kamar Standar</td>
                    <td>2 Dewasa</td>
                    <td><button class="input-group-text btn border-0"><a href="#standar">Detail</a></button></td>
                </tr>
                <tr>
                    <td>Kamar Executive King</td>
                    <td>1 Double Besar</td>
                    <td><button class="input-group-text btn border-0"><a href="#executive">Detail</a></button></td>
                </tr>
                <tr>
                    <td>Kamar Backpacker</td>
                    <td>1 Single</td>
                    <td><button class="input-group-text btn border-0"><a href="#backpacker">Detail</a></button></td>
                </tr>
                <tr>
                    <td>Suite Premier</td>
                    <td>1 Double Besar</td>
                    <td><button class="input-group-text btn border-0"><a href="#premier">Detail</a></button></td>
                </tr>
                <tr>
                    <td>Suite Presidential</td>
                    <td>1 Tempat Tidur Sofa dan 1 Double Besar</td>
                    <td><button class="input-group-text btn border-0"><a href="#presidential">Detail</a></button></td>
                </tr>
                <tr>
                    <td>Kamar Superior King</td>
                    <td>1 Single</td>
                    <td><button class="input-group-text btn border-0"><a href="#superior">Detail</a></button></td>
                </tr>
                <tr>
                    <td>Kamar Twin</td>
                    <td>2 Single</td>
                    <td><button class="input-group-text btn border-0"><a href="#twin">Detail</a></button></td>
                </tr>
                <tr>
                    <td>Kamar Deluxe Twin</td>
                    <td>2 Single</td>
                    <td><button class="input-group-text btn border-0"><a href="#deluxe twin">Detail</a></button></td>
                </tr>
                <tr>
                    <td>Kamar Twin</td>
                    <td>2 Single</td>
                    <td><button class="input-group-text btn border-0"><a href="#twin">Detail</a></button></td>
                </tr>
            </tbody>
        </table>
        <!-- =================================================================== -->
        <!-- detail kamar-->
        <!-- kamar double -->
        <div class="box" id="double">
            <div class="frame">
                <button><a href="#">X</a></button>
                <h3>Kamar Deluxe Double</h3>
                <h3>Rp.1.400.000/malam</h3>
                <big>Pemandangan :</big>
                <ul>
                    <li>Pemandangan Gunung</li>
                    <li>Pemandangan Kota</li>
                </ul>
                <big>Fasilitas kamar :</big>
                <ul>
                    <li>2 tempat tidur besar</li>
                    <li>Hand sanitizer</li>
                    <li>Pembuat teh/kopi</li>
                    <li>Mini bar</li>
                    <li>AC</li>
                    <li>Lantai keramik/marmer</li>
                    <li>Kamar terhubung</li>
                    <li>Ketel listrik</li>
                    <li>Meja kerja</li>
                    <li>TV</li>
                    <li>Telepon</li>
                    <li>TV layar datar</li>
                    <li>TV kabel</li>
                    <li>Stop kontak dekat tempat tidur</li>
                    <li>Papan jemur baju</li>
                    <li>Layanan bangun tidur</li>
                    <li>Kamar single ber-AC untuk akomodasi tamu</li>
                </ul>
                <big>Aturan rokok :</big>
                Bebas Rokok
                <p></p>
                <a href="#pesan_deluxe"><button>Pesan Kamar</button> </a>
            </div>
        </div>
        <!-- =================================================================== -->
        <!-- kamar standar -->
        <div class="box" id="standar">
            <div class="frame">
                <button> <a href="#">X</a></button>
                <h3>Kamar standar</h3>
                <h3>Rp.1.000.000</h3>
                <big>Pemandangan :</big>
                <ul>
                    <li>Pemandangan Kota</li>
                </ul>
                <big>Fasilitas kamar :</big>
                <ul>
                    <li>2 tempat tidur</li>
                    <li>Hand sanitizer</li>
                    <li>Pembuat teh/kopi</li>
                    <li>Mini bar</li>
                    <li>AC</li>
                    <li>Kamar Terhubung </li>
                    <li>Lantai berkarpet</li>
                    <li>Ketel listrik</li>
                    <li>Meja kerja</li>
                    <li>TV</li>
                    <li>Telepon</li>
                    <li>TV kabel</li>
                    <li>Stop kontak dekat tempat tidur</li>
                    <li>Papan jemur baju</li>
                    <li>Layanan bangun tidur</li>
                    <li>Kamar single ber-AC untuk akomodasi tamu</li>
                </ul>
                <big>Aturan rokok :</big>
                Bebas Rokok
                <p></p>
                <a href="#pesan_standar"><button>Pesan Kamar</button> </a>
            </div>
        </div>
        <!-- =================================================================== -->
        <!-- kamar executive-->
        <div class="box" id="executive">
            <div class="frame">
                <button><a href="#">X</a></button>
                <h3>Kamar Executive King</h3>
                <h3>Rp.2.500.000/malam</h3>
                <big>Pemandangan :</big>
                <ul>
                    <li>pemandangan Gunung</li>
                    <li>Pemandangan Kota</li>
                </ul>
                <big>Fasilitas kamar :</big>
                <ul>
                    <li>2 tempat tidur besar</li>
                    <li>Hand sanitizer</li>
                    <li>Pembuat teh/kopi</li>
                    <li>Mini bar</li>
                    <li>AC</li>
                    <li>Lantai Keramik/marmer</li>
                    <li>Kamar Terhubung </li>
                    <li>Lantai berkarpet</li>
                    <li>Ketel listrik</li>
                    <li>Sofa</li>
                    <li>Meja kerja</li>
                    <li>TV</li>
                    <li>Telepon</li>
                    <li>TV Layar Datar</li>
                    <li>TV kabel</li>
                    <li>Stop kontak dekat tempat tidur</li>
                    <li>Papan jemur baju</li>
                    <li>Layanan bangun tidur</li>
                    <li>Kamar single ber-AC untuk akomodasi tamu</li>
                </ul>
                <big>Aturan rokok :</big>
                Bebas Rokok
                <p></p>
                <a href="#pesan_executive"><button>Pesan Kamar</button> </a>
            </div>
        </div>
        <!-- =================================================================== -->
        <!-- kamar backpacker -->
        <div class="box" id="backpacker">
            <div class="frame">
                <button> <a href="#">X</a></button>
                <h3>Kamar Backpacker</h3>
                <h3>Rp.800.000.00</h3>
                <big>Pemandangan :</big>
                <ul>
                    <li>Pemandangan Kota</li>
                </ul>
                <big>Fasilitas kamar :</big>
                <ul>
                    <li>1 tempat tidur</li>
                    <li>Lantai atas bisa dicapai dengan lift</li>
                    <li>Hand sanitizer</li>
                    <li>Pembuat teh/kopi</li>
                    <li>Mini bar</li>
                    <li>AC</li>
                    <li>Lantai Keramik/marmer</li>
                    <li>Kamar Terhubung </li>
                    <li>Lantai berkarpet</li>
                    <li>Ketel listrik</li>
                    <li>Sofa</li>
                    <li>Meja kerja</li>
                    <li>TV</li>
                    <li>Telepon</li>
                    <li>TV Layar Datar</li>
                    <li>TV kabel</li>
                    <li>Stop kontak dekat tempat tidur</li>
                    <li>Papan jemur baju</li>
                    <li>Layanan bangun tidur</li>
                    <li>Kamar single ber-AC untuk akomodasi tamu</li>
                </ul>
                <big>Aturan rokok :</big>
                Bebas Rokok
                <p></p>
                <a href="#pesan_backpacker"><button>Pesan Kamar</button> </a>
            </div>
        </div>
        <!-- =================================================================== -->
        <!-- kamar premier -->
        <div class="box" id="premier">
            <div class="frame">
                <button> <a href="#">X</a></button>
                <h3>Kamar Suite Premier</h3>
                <h3>Rp.1.000.000/malam</h3>
                <big>Pemandangan :</big>
                <ul>
                    <li>Pemandangan Gunung</li>
                </ul>
                <big>Fasilitas kamar :</big>
                <ul>
                    <li>satu tempat tidur besar</li>
                    <li>Lantai atas bisa dicapai dengan lift</li>
                    <li>Lemari</li>
                    <li>Hand sanitizer</li>
                    <li>Pembuat teh/kopi</li>
                    <li>Mini bar</li>
                    <li>AC</li>
                    <li>Lantai Keramik/marmer</li>
                    <li>Kamar Terhubung </li>
                    <li>Lantai berkarpet</li>
                    <li>Ketel listrik</li>
                    <li>Sofa</li>
                    <li>Meja kerja</li>
                    <li>TV</li>
                    <li>Telepon</li>
                    <li>TV Layar Datar</li>
                    <li>TV kabel</li>
                    <li>Stop kontak dekat tempat tidur</li>
                    <li>Papan jemur baju</li>
                    <li>Layanan bangun tidur</li>
                    <li>Kamar single ber-AC untuk akomodasi tamu</li>
                </ul>
                <big>Aturan rokok :</big>
                Bebas Rokok
                <p></p>
                <a href="#pesan_premier"><button>Pesan Kamar</button> </a>
            </div>
        </div>
        <!-- =================================================================== -->
        <!-- kamar presidential -->
        <div class="box" id="presidential">
            <div class="frame">
                <button> <a href="#">X</a></button>
                <h3>Kamar Suite Presidential</h3>
                <h3>Rp.2.500.000</h3>
                <big>Pemandangan :</big>
                <ul>
                    <li>Pemandangan Kota</li>
                </ul>
                <big>Fasilitas kamar :</big>
                <ul>
                    <li>1 tempat tidur dengan sofa dan 1 tempat tidur</li>
                    <li>Lantai atas bisa dicapai dengan lift</li>
                    <li>Lemari</li>
                    <li>Hand sanitizer</li>
                    <li>Pembuat teh/kopi</li>
                    <li>Mini bar</li>
                    <li>AC</li>
                    <li>Lantai Keramik/marmer</li>
                    <li>Kamar Terhubung </li>
                    <li>Lantai berkarpet</li>
                    <li>Ketel listrik</li>
                    <li>Sofa</li>
                    <li>Meja kerja</li>
                    <li>TV</li>
                    <li>Telepon</li>
                    <li>TV Layar Datar</li>
                    <li>Pemutar DVD</li>
                    <li>TV kabel</li>
                    <li>Stop kontak dekat tempat tidur</li>
                    <li>Papan jemur baju</li>
                    <li>Layanan bangun tidur</li>
                    <li>Kamar single ber-AC untuk akomodasi tamu</li>
                </ul>
                <big>Aturan rokok :</big>
                Bebas Rokok
                <p></p>
                <a href="#pesan_presidential"><button>Pesan Kamar</button> </a>
            </div>
        </div>
        <!-- =================================================================== -->
        <!-- kamar superior -->
        <div class="box" id="superior">
            <div class="frame">
                <button> <a href="#">X</a></button>
                <h3>Kamar Superior King</h3>
                <h3>Rp.900.000.00</h3>
                <big>Pemandangan :</big>
                <ul>
                    <li>Pemandangan kolam renang</li>
                </ul>
                <big>Fasilitas kamar :</big>
                <ul>
                    <li>1 tempat tidur</li>
                    <li>Lantai atas bisa dicapai dengan lift</li>
                    <li>Lemari</li>
                    <li>Hand sanitizer</li>
                    <li>Pembuat teh/kopi</li>
                    <li>Mini bar</li>
                    <li>AC</li>
                    <li>Lantai Keramik/marmer</li>
                    <li>Kamar Terhubung </li>
                    <li>Lantai berkarpet</li>
                    <li>Ketel listrik</li>
                    <li>Sofa</li>
                    <li>Meja kerja</li>
                    <li>TV</li>
                    <li>Telepon</li>
                    <li>TV Layar Datar</li>
                    <li>TV kabel</li>
                    <li>Stop kontak dekat tempat tidur</li>
                    <li>Papan jemur baju</li>
                    <li>Layanan bangun tidur</li>
                    <li>Kamar single ber-AC untuk akomodasi tamu</li>
                </ul>
                <big>Aturan rokok :</big>
                Bebas Rokok
                <p></p>
                <a href="#pesan_superior"><button>Pesan Kamar</button> </a>
            </div>
        </div>
        <!-- =================================================================== -->
        <!-- kamar twin -->
        <div class="box" id="twin">
            <div class="frame">
                <button> <a href="#">X</a></button>
                <h3>Kamar Twin</h3>
                <h3>Rp.1.200.000</h3>
                <big>Pemandangan :</big>
                <ul>
                    <li>Pemandangan </li>
                </ul>
                <big>Fasilitas kamar :</big>
                <ul>
                    <li>terdapat 2 tempat tidur terpisah</li>
                    <li>Lantai atas bisa dicapai dengan lift</li>
                    <li>Lemari</li>
                    <li>Hand sanitizer</li>
                    <li>Pembuat teh/kopi</li>
                    <li>Mini bar</li>
                    <li>AC</li>
                    <li>Lantai Keramik/marmer</li>
                    <li>Kamar Terhubung </li>
                    <li>Lantai berkarpet</li>
                    <li>Ketel listrik</li>
                    <li>Sofa</li>
                    <li>Meja kerja</li>
                    <li>TV</li>
                    <li>Telepon</li>
                    <li>TV Layar Datar</li>
                    <li>TV kabel</li>
                    <li>Stop kontak dekat tempat tidur</li>
                    <li>Papan jemur baju</li>
                    <li>Layanan bangun tidur</li>
                    <li>Kamar single ber-AC untuk akomodasi tamu</li>
                </ul>
                <big>Aturan rokok :</big>
                Bebas Rokok
                <p></p>
                <a href="#pesan_twin"><button>Pesan Kamar</button> </a>
            </div>
        </div>
        <!-- =================================================================== -->
        <!-- kamar deluxe -->
        <div class="box" id="deluxe twin">
            <div class="frame">
                <button> <a href="#">X</a></button>
                <h3>Kamar deluxe Twin</h3>
                <h3>Rp.1.200.000</h3>
                <big>Pemandangan :</big>
                <ul>
                    <li>Pemandangan </li>
                </ul>
                <big>Fasilitas kamar :</big>
                <ul>
                    <li>2 tempat tidur terpisah</li>
                    <li>Lantai atas bisa dicapai dengan lift</li>
                    <li>Lemari</li>
                    <li>Hand sanitizer</li>
                    <li>Pembuat teh/kopi</li>
                    <li>Mini bar</li>
                    <li>AC</li>
                    <li>Lantai Keramik/marmer</li>
                    <li>Kamar Terhubung </li>
                    <li>Lantai berkarpet</li>
                    <li>Ketel listrik</li>
                    <li>Sofa</li>
                    <li>Meja kerja</li>
                    <li>TV</li>
                    <li>Telepon</li>
                    <li>TV Layar Datar</li>
                    <li>TV kabel</li>
                    <li>Stop kontak dekat tempat tidur</li>
                    <li>Papan jemur baju</li>
                    <li>Layanan bangun tidur</li>
                    <li>Kamar single ber-AC untuk akomodasi tamu</li>
                </ul>
                <big>Aturan rokok :</big>
                Bebas Rokok
                <p></p>
                <a href="#pesan_deluxe twin"><button>Pesan Kamar</button> </a>
            </div>
        </div>
        <!-- =================================================================== -->
        <!-- kamar twin2 -->
        <div class="box" id="twin2">
            <div class="frame">
                <button> <a href="">X</a></button>
                <h3>Kamar Twin</h3>
                <h3>Rp.1.200.000</h3>
                <big>Pemandangan :</big>
                <ul>
                    <li>Pemandangan </li>
                </ul>
                <big>Fasilitas kamar :</big>
                <ul>
                    <li>2 tempat tidur terpisah</li>
                    <li>Lantai atas bisa dicapai dengan lift</li>
                    <li>Lemari</li>
                    <li>Hand sanitizer</li>
                    <li>Pembuat teh/kopi</li>
                    <li>Mini bar</li>
                    <li>AC</li>
                    <li>Lantai Keramik/marmer</li>
                    <li>Kamar Terhubung </li>
                    <li>Lantai berkarpet</li>
                    <li>Ketel listrik</li>
                    <li>Sofa</li>
                    <li>Meja kerja</li>
                    <li>TV</li>
                    <li>Telepon</li>
                    <li>TV Layar Datar</li>
                    <li>TV kabel</li>
                    <li>Stop kontak dekat tempat tidur</li>
                    <li>Papan jemur baju</li>
                    <li>Layanan bangun tidur</li>
                    <li>Kamar single ber-AC untuk akomodasi tamu</li>
                </ul>
                <big>Aturan rokok :</big>
                Bebas Rokok
                <p></p>
                <a href="#pesan_twin"><button>Pesan Kamar</button> </a>
            </div>
        </div>
    </div>
    <!-- form pemesanan -->
    <!-- kamar deluxe -->
    <div class="box" id="pesan_deluxe">
        <div class="frame">
            <a href="#double" class="back">Kembali</a>
            <h2>Kamar Deluxe Double (2 Dewasa + 1 Anak)</h2>
            <h2>Rp. 1.500.000 / Malam</h2>
            <form action="proses.php" method="post">
                <label for="">NIK/Paspor/SIM</label>
                <input type="number" name="nik" id="">
                <label for="">Nama Pemesan</label>
                <input type="text" name="nama" id="">
                <label for="">No Telepon</label>
                <input type="number" name="tlpn" id="">
                <label for="">Alamat</label>
                <input type="alamat" name="alamat" id="">
                <input type="hidden" name="kamar" id="" value="Deluxe Double">
                <input type="hidden" name="harga" id="" value="1500000">
                <p></p>
                <input type="submit" name="deluxe" id="">
            </form>
        </div>
    </div>
    <!-- kamar standar -->
    <div class="box" id="pesan_standar">
        <div class="frame">
            <a href="#standar" class="back">Kembali</a>
            <h2>Kamar standar (2 Dewasa)</h2>
            <h2>Rp. 1.000.000 / Malam</h2>
            <form action="proses.php" method="post">
                <label for="">NIK/Paspor/SIM</label>
                <input type="number" name="nik" id="">
                <label for="">Nama Pemesan</label>
                <input type="text" name="nama" id="">
                <label for="">No Telepon</label>
                <input type="number" name="tlpn" id="">
                <label for="">Alamat</label>
                <input type="alamat" name="alamat" id="">
                <input type="hidden" name="kamar" id="" value="Standar">
                <input type="hidden" name="harga" id="" value="1000000">
                <p></p>
                <input type="submit" name="standar" id="">
            </form>
        </div>
    </div>
    <!-- kamar executive -->
    <div class="box" id="pesan_executive">
        <div class="frame">
            <a href="#executive" class="back">Kembali</a>
            <h2>Kamar executive (1 Double)</h2>
            <h2>Rp. 2.500.000 / Malam</h2>
            <form action="proses.php" method="post">
                <label for="">NIK/Paspor/SIM</label>
                <input type="number" name="nik" id="">
                <label for="">Nama Pemesan</label>
                <input type="text" name="nama" id="">
                <label for="">No Telepon</label>
                <input type="number" name="tlpn" id="">
                <label for="">Alamat</label>
                <input type="alamat" name="alamat" id="">
                <input type="hidden" name="kamar" id="" value="Executive">
                <input type="hidden" name="harga" id="" value="2500000">
                <p></p>
                <input type="submit" name="executive" id="">
            </form>
        </div>
    </div>
    <!-- kamar backpacker -->
    <div class="box" id="pesan_backpacker">
        <div class="frame">
            <a href="#backpacker" class="back">Kembali</a>
            <h2>Kamar backpacker (1 single)</h2>
            <h2>Rp. 800.000 / Malam</h2>
            <form action="proses.php" method="post">
                <label for="">NIK/Paspor/SIM</label>
                <input type="number" name="nik" id="">
                <label for="">Nama Pemesan</label>
                <input type="text" name="nama" id="">
                <label for="">No Telepon</label>
                <input type="number" name="tlpn" id="">
                <label for="">Alamat</label>
                <input type="alamat" name="alamat" id="">
                <input type="hidden" name="kamar" id="" value="backpacker">
                <input type="hidden" name="harga" id="" value="800000">
                <p></p>
                <input type="submit" name="backpacker" id="">
            </form>
        </div>
    </div>
    <!-- kamar premier -->
    <div class="box" id="pesan_premier">
        <div class="frame">
            <a href="#premier" class="back">Kembali</a>
            <h2>Kamar premier (1 double)</h2>
            <h2>Rp. 1.000.000 / Malam</h2>
            <form action="proses.php" method="post">
                <label for="">NIK/Paspor/SIM</label>
                <input type="number" name="nik" id="">
                <label for="">Nama Pemesan</label>
                <input type="text" name="nama" id="">
                <label for="">No Telepon</label>
                <input type="number" name="tlpn" id="">
                <label for="">Alamat</label>
                <input type="alamat" name="alamat" id="">
                <input type="hidden" name="kamar" id="" value="Premier">
                <input type="hidden" name="harga" id="" value="100000">
                <p></p>
                <input type="submit" name="premier" id="">
            </form>
        </div>
    </div>
    <!-- kamar presidential -->
    <div class="box" id="pesan_presidential">
        <div class="frame">
            <a href="#presidential" class="back">Kembali</a>
            <h2>Kamar presidential (2 Dewasa)</h2>
            <h2>Rp. 2.500.000 / Malam</h2>
            <form action="proses.php" method="post">
                <label for="">NIK/Paspor/SIM</label>
                <input type="number" name="nik" id="">
                <label for="">Nama Pemesan</label>
                <input type="text" name="nama" id="">
                <label for="">No Telepon</label>
                <input type="number" name="tlpn" id="">
                <label for="">Alamat</label>
                <input type="alamat" name="alamat" id="">
                <input type="hidden" name="kamar" id="" value="Presidential">
                <input type="hidden" name="harga" id="" value="2500000">
                <p></p>
                <input type="submit" name="presidential" id="">
            </form>
        </div>
    </div>
    <!-- kamar superior -->
    <div class="box" id="pesan_superior">
        <div class="frame">
            <a href="#superior" class="back">Kembali</a>
            <h2>Kamar superior (1 single)</h2>
            <h2>Rp. 9.000.00 / Malam</h2>
            <form action="proses.php" method="post">
                <label for="">NIK/Paspor/SIM</label>
                <input type="number" name="nik" id="">
                <label for="">Nama Pemesan</label>
                <input type="text" name="nama" id="">
                <label for="">No Telepon</label>
                <input type="number" name="tlpn" id="">
                <label for="">Alamat</label>
                <input type="alamat" name="alamat" id="">
                <input type="hidden" name="kamar" id="" value="Superior">
                <input type="hidden" name="harga" id="" value="9000000">
                <p></p>
                <input type="submit" name="superior" id="">
            </form>
        </div>
    </div>
    <!-- kamar twin -->
    <div class="box" id="pesan_twin">
        <div class="frame">
            <a href="#twin" class="back">Kembali</a>
            <h2>Kamar twin (2 single)</h2>
            <h2>Rp. 800.000 / Malam</h2>
            <form action="proses.php" method="post">
                <label for="">NIK/Paspor/SIM</label>
                <input type="number" name="nik" id="">
                <label for="">Nama Pemesan</label>
                <input type="text" name="nama" id="">
                <label for="">No Telepon</label>
                <input type="number" name="tlpn" id="">
                <label for="">Alamat</label>
                <input type="alamat" name="alamat" id="">
                <input type="hidden" name="kamar" id="" value="Twin">
                <input type="hidden" name="harga" id="" value="800000">
                <p></p>
                <input type="submit" name="twin" id="">
            </form>
        </div>
    </div>
    <!-- kamar deluxe twin -->
    <div class="box" id="pesan_deluxe twin">
        <div class="frame">
            <a href="#deluxe_twin" class="back">Kembali</a>
            <h2>Kamar deluxe twin (2 single)</h2>
            <h2>Rp. 1.200.000 / Malam</h2>
            <form action="proses.php" method="post">
                <label for="">NIK/Paspor/SIM</label>
                <input type="number" name="nik" id="">
                <label for="">Nama Pemesan</label>
                <input type="text" name="nama" id="">
                <label for="">No Telepon</label>
                <input type="number" name="tlpn" id="">
                <label for="">Alamat</label>
                <input type="alamat" name="alamat" id="">
                <input type="hidden" name="kamar" id="" value="Deluxe Twin">
                <input type="hidden" name="harga" id="" value="1200000">
                <p></p>
                <input type="submit" name="deluxe_twin" id="">
            </form>
        </div>
    </div>
    <!-- kamar twin -->
    <div class="box" id="pesan_twin">
        <div class="frame">
            <a href="#twin" class="back">Kembali</a>
            <h2>Kamar twin (2 single)</h2>
            <h2>Rp. 800.000 / Malam</h2>
            <form action="proses.php" method="">
                <label for="">NIK/Paspor/SIM</label>
                <input type="number" name="nik" id="">
                <label for="">Nama Pemesan</label>
                <input type="text" name="nama" id="">
                <label for="">No Telepon</label>
                <input type="number" name="tlpn" id="">
                <label for="">Alamat</label>
                <input type="alamat" name="alamat" id="">
                <input type="hidden" name="kamar" id="" value="Twin">
                <input type="hidden" name="harga" id="" value="800000">
                <p></p>
                <input type="submit" name="deluxe" id="">
            </form>
        </div>
    </div>
</body>

</html>