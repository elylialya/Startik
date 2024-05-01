<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
<section>
    <nav>
        <div class="logo">
            <img src="asset/logo.png" alt="">
        </div>
        <div class="name">
            <h1>Startik</h1>
        </div>

        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Hubungi kami</a></li>
            <li> <a href="{{ route('transaksi') }}">Transaksi</a></li>
            <li> <a href="{{ route('detailproduk') }}">Produk</a></li>
            <li><a href="#">Bantuan</a></li>
        </ul>
        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Cari obat...">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
                <div class="user">
                    <a href="{{ route('user.profile') }}"><i class="fa-solid fa-user"></i></a>
                </div>
                <div class="cart">
                    <a href="{{ route('keranjang') }}"><i class="fa-solid fa-cart-shopping"></i>
               </div>
            </div>
        </div>

        <div class="input-group">
            <a href="{{ route('login') }}"><input type="submit" value="Login" id="submit"></a>
            <a href="{{ route('logout') }}"><button type="button">logout</button></a>
        </div>
    </nav>

    <!--content-->
    <div class="main">
        <div class="main_tag">
            <h1>SELAMAT DATANG DI<br><span>APOTEK STARTIK</span></h1>
            <p>
                Aplikasi apotek kami menawarkan penawaran yang terbaik dengan obat terlengkap terjamin dan asli
                , yang bisa memenuhi semua kebutuhan kesehatanmu. produk yang dijual di Startik hadir dengan
                berbagai macam kategori obat pilihan untuk memenuhi seluruh kebutuhan kesehatan, mulai dari obat
                generik, obat untuk ibu dan anak, suplemen kesehatan,dan perawatan tubuh
            </p>
            <a href="#" class="main_btn">Miliki Sekarang</a>
        </div>

        <div class="main_img">
            <img src="asset/obat.jpg">
        </div>
    </div>

</section>

<!--category-->

<div class='category coll-3 icon-p-2'>
    <h2> Kategori </h2>
    <ul>
        <li>
            <i class="fa-solid fa-prescription-bottle-medical"></i>
            <span>ANTISEPTIC</span></a>
        </li>
        <li>
            <i class="fa-solid fa-pills"></i>
            <span>VITAMIN</span></a>
        </li>
        <li>
            <i class="fa-solid fa-capsules"></i>
            </svg><span>SUPLEMEN</span></a>
        </li>
        <li>
            <i class="fa-solid fa-tablets"></i>
            </svg><span>FLU BATUK ALERGI</span></a>
        </li>
        <li>
            <i class="fa-solid fa-prescription-bottle"></i>
            <span>PERNAPASAN</span></a>
        </li>
    </ul>
</div>
<!--end -->

<!--Service/Layanan-->

<div class="services">

    <h2>Layanan</h2>

    <div class="services_box">
        <div class="services_card">
            <i class="fa-solid fa-truck-fast"></i>
            <h3>Pengiriman cepat</h3>
        </div>

        <div class="services_card">
            <i class="fa-solid fa-headset"></i>
            <h3>Layanan 24x7</h3>
        </div>

        <div class="services_card">
            <i class="fa-solid fa-tag"></i>
            <h3>Penawaran terbaik</h3>
        </div>
    </div>
</div>

<!--end service-->


<!--Penawaran Obat -->

<div class="featured_boks">

    <h1>Penawaran Obat</h1>

    <div class="featured_obat_box">

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/mylanta.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>MYLANTA CAIR 150ML</h4>
                <p class="obat_price">
                    Rp 47.580<sub><del>Rp 50.000</del></sub></p>
                    <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                    <a href="{{ route('keranjang') }}" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/promag.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>Promag Tablet</h4>
                <p class="obat_price">Rp 7.987<sub><del>Rp 9.500</del></sub></p>
                <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                    <a href="{{ route('keranjang') }}" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/neurobion.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>Neurobion Forte Fc Tablet </h4>
                <p class="obat_price">Rp 50.511<sub><del>Rp 53.100</del></sub></p>
                <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                    <a href="{{ route('keranjang') }}" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/sakatonik.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>Sakatonik Activ Syr 100ml</h4>
                <p class="obat_price">Rp 15.079<sub><del>Rp 16.600,</del></sub></p>
                <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                    <a href="{{ route('keranjang') }}" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/paracetamol.webp">
            </div>

            <div class="featurde_obat_tag">
                <h4>Paracetamol Rama 500mg Kaplet</h4>
                <p class="obat_price">Rp 4.402<sub><del>Rp 5.500,</del></sub></p>
                <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                    <a href="{{ route('keranjang') }}" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/salbutamol sirup.webp">
            </div>

            <div class="featurde_obat_tag">
                <h4>Lasal Exp Sirup 100ml</h4>
                <p class="obat_price">Rp 61.710<sub><del>Rp 63.450</del></sub></p>
                <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                    <a href="{{ route('keranjang') }}" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/sangobion2.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>Sangobion Kapsul </h4>
                <p class="obat_price">Rp 21.174<sub><del>Rp 22.500</del></sub></p>
                <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                    <a href="{{ route('keranjang') }}" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/vitamin b.webp">
            </div>

            <div class="featurde_obat_tag">
                <h4>Vitamin B Comp Ipi Tablet</h4>
                <p class="obat_price">Rp 6.516<sub><del>Rp 7.250</del></sub></p>
                <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                    <a href="{{ route('keranjang') }}" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/panadol.png">
            </div>

            <div class="featurde_obat_tag">
                <h4>Panadol Extra Tablet</h4>
                <p class="obat_price">Rp 14.623<sub><del>Rp 15.000</del></sub></p>
                <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                    <a href="{{ route('keranjang') }}" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/sanmol.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>Sanmol Sirup 120mg/5ml</h4>
                <p class="obat_price">Rp 21.938<sub><del>Rp 22.300</del></sub></p>
                <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                    <a href="{{ route('keranjang') }}" class="f_btn">Keranjang</a>
            </div>

        </div>

    </div>
    <!--end Penawaran Obat-->

    <!--Produk Obat Terlaris-->

    <div class="featured_boks">
        <h1>Produk Obat Terlaris</h1>

        <div class="featured_obat_box">

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/sanmol.jpg">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Sanmol Sirup 120mg/5ml</h4>
                    <p class="obat_price">Rp 21.938</p>
                    <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/panadol.png">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Panadol Extra Tablet</h4>
                    <p class="obat_price">Rp 14.623</p>
                    <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/vitamin b.webp">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Vitamin B Comp Ipi Tablet</h4>
                    <p class="obat_price">Rp 6.516</p>
                    <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/paracetamol.webp">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Paracetamol Rama 500mg Kaplet</h4>
                    <p class="obat_price">Rp 4.402</p>
                    <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                </div>

            </div>


            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/promag.jpg">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Promag Tablet</h4>
                    <p class="obat_price">Rp 7.987</p>
                     <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/neurobion.jpg">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Neurobion Forte Fc Tablet </h4>
                    <p class="obat_price">Rp 50.511</p>
                    <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/sakatonik.jpg">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Sakatonik Activ Syr 100ml</h4>
                    <p class="obat_price">Rp 15.079</p>
                    <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/paracetamol.webp">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Paracetamol Rama 500mg Kaplet</h4>
                    <p class="obat_price">Rp 4.402</p>
                    <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/salbutamol sirup.webp">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Lasal Exp Sirup 100ml</h4>
                    <p class="obat_price">Rp 61.710</p>
                    <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/sangobion2.jpg">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Sangobion Kapsul </h4>
                    <p class="obat_price">Rp 21.174</p>
                    <a href="{{ route('transaksi') }}" class="f_btn">Beli</a>
                </div>

            </div>

        </div>

        <!--end produk obat terlaris-->


        <!-- footer -->
        <footer class="footer-distributed">
            <div class="footer-left">
                <img src="asset/logo.png" width="50%">
                <h3>Startik</h3>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>Informasi</span>
                    Apotek Digital adalah aplikasi memudahkan seluruh aktivitas di apotek dan toko obat dengan fitur
                    super lengkap seperti keuangan, kasir, manajemen stok, pengadaan, penerimaan, database dan fitur
                    lainnya.
                </p>
                <p class="footer-links">
                    <a href="#">Tentang kami</a>
                    |
                    <a href="#">FAQ</a>
                    |
                    <a href="#">Bantuan</a>
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Jl. Brig Jend. Hasan Basri No.6, Sungai Miai,</span>
                        Kalimantan Selatan, 70124</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+91 22-27782183</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">Email :startik@gmail.com</a></p>
                </div>
            </div>
        </footer>

        <!-- end footer-->

        </body>
</html>