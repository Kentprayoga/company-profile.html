<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CV_company</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel Impian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- <div class="mx-auto"> -->
                <!-- Centering the navbar items -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#kamar">Kamar</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#lokasi">Lokasi</a>
                    </li>
                </ul>
                <!-- </div> -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <!-- Tentang -->

    <section class="container custom-bg border rounded my-5" id="tentang">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://lh3.googleusercontent.com/p/AF1QipMTcc7lG2KwfD6MzTaKedDXJbn-s6B_r3TMMJd2=s1360-w1360-h1020"
                    alt="" class="img-fluid" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="200" />
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                <h1 class="judul">Tentang kami</h1>
                <p>
                    Hotel kami adalah hotel di lokasi yang baik, tepatnya berada di setiap planet. Resepsionis siap 24
                    jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk
                    menghubungi resepsionis,
                    kami siap melayani Anda. WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap
                    terhubung dengan keluarga dan teman.
                </p>
                <p>. . .</p>
            </div>
        </div>
    </section>
    <!-- tentag end -->
    <!-- kamar -->
    <section class="kamar" id="kamar">
        <div class="container custom-bg border rounded my-5">
            <p class="h5">Tipe Kamar Dan Harga</p>

            <!-- Kamar 1 -->
            <div class="row justify-content mb-5">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://ik.imagekit.io/tvlk/generic-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10010632-b487d7e357cc09b4d7f464f69801a74a.jpeg?_src=imagekit&tr=c-at_max,f-jpg,h-300,pr-true,q-40,w-724"
                                    class="d-block w-100 img-fluid img-thumbnail object-fit-fill border rounded"
                                    alt="Gambar 1" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://ik.imagekit.io/tvlk/generic-asset/Ixf4aptF5N2Qdfmh4fGGYhTN274kJXuNMkUAzpL5HuD9jzSxIGG5kZNhhHY-p7nw/hotel/asset/10010632-889a5366a44eb42fc019ff638b1d470e.jpeg?_src=imagekit&tr=c-at_max,f-jpg,h-460,pr-true,q-40,w-724"
                                    class="d-block w-100 img-fluid img-thumbnail object-fit-fill border rounded"
                                    alt="Gambar 2" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2021/10/13/66d2ba8d-d84d-4bf5-b47a-b22f2686021e-1634099726693-f30d5a471ec10fd579e4ddf1a2b8ec1f.jpg"
                                    class="d-block w-100 img-fluid img-thumbnail object-fit-fill border rounded"
                                    alt="Gambar 3" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Kamar Superior</h3>
                    <p class="fw-light">15.0m²Maks. 2 Tamu</p>
                    <dl class="row">
                        <p class="guest-info">
                            <i class="fa-regular fa-user"></i>
                            <span class="sm-1">2 tamu</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-bed"></i>
                            <span class="sm-1">1 Double</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-utensils"></i>
                            <span class="sm-1">Sarapan tidak tersedia</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-wifi"></i>
                            <span class="sm-1">Tersedia</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-smoking"></i>
                            <span class="sm-1">Boleh merokok di kamar</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-ticket"></i>
                            <span class="sm-1">Tidak bisa refund & reschedule</span>
                        </p>
                        <h4>Deskripsi Kamar</h4>
                        <p class="text-body-tertiary">tipe kamar minimalis minimalis yaitu 18 meter persegi dengan harga
                            terjangkau sangat pas bagi Anda yang mencari akomodasi murah dengan fasilitas yang cukup
                            akrab dengan Anda</p>

                        <div class="badge text-bg-primary text-wrap" style="width: 6rem">IDR 180.165</div>
                    </dl>
                </div>
            </div>

            <!-- Kamar 2 -->
            <div class="row justify-content mb-5">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2023/11/01/691f31e5-8617-491e-a8a0-dbd567f9e333-1698816324808-f34833efa0aecf12ab14573b5fb39e84.jpg"
                                    class="d-block w-100 img-fluid img-thumbnail object-fit-fill border rounded"
                                    alt="Gambar 4" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2023/11/01/26d6f3ef-4a55-4a9d-8cc5-f72b64e9c335-1698816323428-0834fcbe1e46f674c50f76a14b12fd6b.jpg"
                                    class="d-block w-100 img-fluid img-thumbnail object-fit-fill border rounded"
                                    alt="Gambar 5" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2023/11/01/fd5c990c-607f-4076-8df6-8c4d70e851d6-1698816323426-83b361547001561d4c06469b2d821708.jpg"
                                    class="d-block w-100 img-fluid img-thumbnail object-fit-fill border rounded"
                                    alt="Gambar 6" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Kamar Eksekutif Double</h3>
                    <p class="fw-light">19.0m²Maks. 2 Tamu</p>
                    <dl class="row">
                        <p class="guest-info">
                            <i class="fa-regular fa-user"></i>
                            <span class="sm-1">2 tamu</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-bed"></i>
                            <span class="sm-1">1 Double</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-utensils"></i>
                            <span class="sm-1">Sarapan (2 pax) </span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-wifi"></i>
                            <span class="sm-1">Tersedia</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-smoking"></i>
                            <span class="sm-1">Boleh merokok di kamar</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-ticket"></i>
                            <span class="sm-1">Tidak bisa refund & reschedule</span>
                        </p>
                        <h4>Deskripsi Kamar</h4>
                        <p class="text-body-tertiary">Tipe kamar eksekutif dengan luas 18 m2, salah satu kamar yang
                            sangat direkomendasikan untuk keluarga Anda. cukup luas, aman dan nyaman</p>

                        <div class="badge text-bg-primary text-wrap" style="width: 6rem">IDR 373.000</div>
                    </dl>
                </div>
            </div>

            <!-- Kamar 3 -->
            <div class="row justify-content mb-5">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2024/07/22/9e0d1be4-5034-4a13-b8a4-50f4171fb697-1721623524084-2f583effb9999b0ecc4fb076e66dbfbc.jpg"
                                    class="d-block w-100 img-fluid object-fit-fill border rounded" alt="Gambar 7" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2024/07/22/c85a88b3-4b91-4d5c-99e1-7a33cb81079b-1721623523250-203f59c6371c7630b8c6165af7fda86e.jpg"
                                    class="d-block w-100 img-fluid object-fit-fill border rounded" alt="Gambar 8" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2024/07/22/b2c0d9c5-1f6a-4e68-97d7-e5cf3f3cf265-1721623524082-9846fa67e65b5a9bc2f81ada3b39b943.jpg"
                                    class="d-block w-100 img-fluid object-fit-fill border rounded" alt="Gambar 9" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Kamar Eksekutif Twin</h3>
                    <p class="fw-light">19.0m²Maks. 2 Tamu</p>
                    <dl class="row">
                        <p class="guest-info">
                            <i class="fa-regular fa-user"></i>
                            <span class="sm-1">2 tamu</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-bed"></i>
                            <span class="sm-1">2 Twin</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-utensils"></i>
                            <span class="sm-1">19.0m²Maks. 2 Tamu</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-wifi"></i>
                            <span class="sm-1">Tersedia</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-smoking"></i>
                            <span class="sm-1">Boleh merokok di kamar</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-ticket"></i>
                            <span class="sm-1">Tidak bisa refund & reschedule</span>
                        </p>
                        <h4>Deskripsi Kamar</h4>
                        <p class="text-body-tertiary">Tipe kamar eksekutif dengan luas 18 m2, salah satu kamar yang
                            sangat direkomendasikan untuk keluarga Anda. cukup luas, aman dan nyaman</p>
                        <div class="badge text-bg-primary text-wrap" style="width: 6rem">IDR 373.000</div>
                    </dl>
                </div>
            </div>
            <!-- Kamar 4 -->
            <div class="row justify-content mb-5">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2023/11/01/e096b922-d9a3-4ae6-b66d-23b2661c28f2-1698816324803-1623a65a886b84ec657ef786dbe84a1f.jpg"
                                    class="d-block w-100 img-fluid object-fit-fill border rounded" alt="Gambar 10" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2023/11/01/402e83c8-ec48-4f21-a5b0-26037c382658-1698816324805-204937a565b2c9075cd9fbd1f1a49caa.jpg"
                                    class="d-block w-100 img-fluid object-fit-fill border rounded" alt="Gambar 11" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-mobile/tix-hotel/images-web/2023/11/01/25108f5b-700a-40a8-b7cc-5d87b79aecef-1698816323432-7e1c3e52ae3c580dfe0a724be7df8ee5.jpg"
                                    class="d-block w-100 img-fluid object-fit-fill border rounded" alt="Gambar 12" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Kamar Suite Double</h3>
                    <p class="fw-light">21.0m²Maks. 2 Tamu</p>
                    <dl class="row">
                        <p class="guest-info">
                            <i class="fa-regular fa-user"></i>
                            <span class="sm-1">2 tamu</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-bed"></i>
                            <span class="sm-1">1 Double</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-utensils"></i>
                            <span class="sm-1">Sarapan (2 pax)</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-wifi"></i>
                            <span class="sm-1">Tersedia</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-smoking"></i>
                            <span class="sm-1">Dilarang merokok di kamar</span>
                        </p>
                        <p class="guest-info">
                            <i class="fa-solid fa-ticket"></i>
                            <span class="sm-1">Tidak bisa refund & reschedule</span>
                        </p>
                        <h4>Deskripsi Kamar</h4>
                        <p class="text-body-tertiary">kamar yang cocok untuk keluarga,karena ukuran ruangan yang besar
                            sehingga membuat para tamu mendapat kenyamanan yang lebih dari kamar lain</p>
                        <div class="badge text-bg-primary text-wrap" style="width: 6rem">IDR 423.000</div>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <!-- kamar end -->
    <!--Fasilitas start-->
    <section class="fasilitas" id="fasilitas">
        <div class="container custom-bg border rounded my-5">
            <p class="judul h2">Semua Fasilitas di Hotel Impian</p>
            <div class="row  mb-5">
                <ul class="fasilitas_icon d-flex justify-content-start">
                    <ul class="li_icon_kiri text-start mx-auto ">
                        <div class="icon d-flex align-items-center">
                            <i class="fa-solid fa-utensils"></i>
                            <span class="title fw-bold">Makanan dan Minuman</span>
                        </div>
                        <div class="isi">
                            <li>Makan malam dari menu</li>
                            <li>Makan siang dari menu</li>
                            <li>Restoran ber-AC</li>
                            <li>Sarapan</li>
                            <li>Sarapan dan makan malam</li>
                            <li>Sarapan dan makan siang</li>
                            <li>Sarapan disuguhkan ke meja makan</li>
                            <li>Sarapan berbiaya</li>
                            <li>Makan malam prasmanan</li>
                            <li>Makan siang prasmanan</li>
                            <li>Makan malam bermenu</li>
                        </div>
                    </ul>
                    <ul class="li_icon_tengah text-start mx-auto ">
                        <div class="icon d-flex align-items-center">
                            <i class="fa-solid fa-hotel "></i></i>
                            <span class="title fw-bold">Fasilitas Publik</span>
                        </div>
                        <div class="isi">
                            <li>Area parkir</li>
                            <li>Layanan kamar 24 jam</li>
                            <li>Restoran</li>
                            <li>Restoran untuk sarapan</li>
                            <li>Restoran untuk makan malam</li>
                            <li>Restoran untuk makan siang</li>
                            <li>WiFi di area umum</li>
                        </div>
                    </ul>
                    <ul class="li_icon_kanann text-start  mx-auto">
                        <div class="icon d-flex align-items-center">
                            <i class="fa-solid fa-bell-concierge "></i>
                            <span class="title fw-bold">Servis Hotel</span>
                        </div>
                        <div class="isi">
                            <li>Bellboy</li>
                            <li>Keamanan 24 jam</li>
                            <li>Laundry</li>
                            <li>Surat kabar</li>
                            <li>Fasilitas nikah</li>
                            <li>Resepsionis 24 jam</li>
                        </div>
                    </ul>
                </ul>
                <!-- kedua -->
                <ul class="fasilitas_icon d-flex justify-content-start">
                    <ul class="li_icon_kiri text-start mx-auto">
                        <div class="icon d-flex align-items-center">
                            <i class="fa-solid fa-door-open "></i>
                            <span class="title fw-bold">Makanan dan Minuman</span>
                        </div>
                        <div class="isi">
                            <li>TV kabel</li>
                            <li>Meja</li>
                            <li>Lemari es</li>
                            <li>Pancuran</li>
                            <li>TV</li>
                        </div>
                    </ul>
                    <ul class="li_icon_tengah text-start mx-auto">
                        <div class="icon d-flex">
                            <i class="fa-solid fa-bullhorn "></i>
                            <span class="title fw-bold">Umum</span>
                        </div>
                        <div class="isi">
                            <li>AC</li>
                            <li>Banquet</li>
                            <li>Area merokok</li>
                        </div>
                    </ul>
                    <ul class="li_icon_kanan text-start mx-auto">
                        <div class="icon d-flex align-items-center">
                            <i class='bx bxs-bank fa'></i>
                            <span class="title fw-bold">Umum</span>
                        </div>
                        <div class="isi">
                            <li>AC</li>
                            <li>Banquet</li>
                            <li>Area merokok</li>
                        </div>
                    </ul>
                </ul>

                <!-- ketiga -->
                <ul class="fasilitas_icon d-flex justify-content-start">
                    <ul class="li_icon_kiri text-start mx-auto">
                        <div class="icon d-flex align-items-center">
                            <i class="fa-solid fa-wifi"></i>
                            <span class="title fw-bold">Konektivitas</span>
                        </div>
                        <div class="isi">
                            <li>Internet Kamar</li>
                            <li>WiFi di area umum berbiaya</li>
                        </div>
                    </ul>
                    <ul class="li_icon_tengah text-start mx-auto">
                        <div class="icon d-flex">
                            <i class="fa-solid fa-laptop "></i>
                            <span class="title fw-bold">Fasilitas Bisnis</span>
                        </div>
                        <div class="isi">
                            <li>Fasilitas rapat</li>
                            <li>Proyektor</li>
                        </div>
                    </ul>
                    <ul class="li_icon_kanan text-start mx-auto">
                        <div class="icon d-flex align-items-center">
                            <i class="fa-solid fa-wheelchair-move"></i>
                            <span class="title fw-bold">Aksesibilitas</span>
                        </div>
                        <div class="isi">
                            <li>Parkir bagi penyandang disabilitas</li>
                        </div>
                    </ul>
                </ul>
            </div>
        </div>
    </section>
    <!-- fasilitas end -->

    <!-- lokasi -->
    <section class="container custom-bg border rounded my-5" id="lokasi">
        <div class="row">
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.318208459302!2d104.46671857447316!3d0.9071919628398044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d97324ee20ae79%3A0x41c27d1f089ac52c!2sKuburan%20Hitler!5e0!3m2!1sid!2sid!4v1728832480631!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3>Lokasi Kami</h3>
                    <p>Kunjungi lokasi kami di peta di samping ini.</p>
                    <p>Alamat:jalanin dulu aja, Provinsi apa aja</p>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->
    <section class="kontak">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="col-md-6 mx-auto">
            <h4>Follow Us</h4>
            <ul class="align-items-center mx-auto">
                <li class="list-inline-item">
                    <a href="https://facebook.com" target="_blank" class="btn btn-outline-primary">Facebook</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://twitter.com" target="_blank" class="btn btn-outline-info">Twitter</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://instagram.com" target="_blank" class="btn btn-outline-danger">Instagram</a>
                </li>
            </ul>
        </div>
        </div>
    </section>
    <!-- contacte -->
    <footer class="footer text-dark text-center py-3">
        <h5 class="mb-0">&copy; 2024 <a href="#tentang" class="text-light text-decoration-none">Hotel Impian</a>. All
            Rights Reserved.</h5>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>