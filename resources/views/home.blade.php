<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

section {
    display: flex;
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
}

/*navbar*/

section .logo img{
    width: 20%;
   margin-bottom: -94px;
   margin-left: 20px;
}

section .name h1{
    margin-top: 40px;
    margin-left: -400px;
    font-size: 30px;
}
section nav
{
   width: 100%;
   height: 20vh;
   display: flex;
   box-shadow: 0 0 10px #089da1;
    background: #fff;
    position: fixed;
    left: 0;
    z-index: 100;
}

section nav ul{
    display: flex;
    gap: 15px;
    margin-left: -280px;
    margin-top: 50px;
    list-style: none;
}

section nav li {
    display: inline-block;
    padding: 0 5px;
}

section nav li a {
    text-decoration: none;
    color: #000;

}

.search {
    margin-top: 5px;
    margin-left: 700px;
    width: 80%;
    position: relative;
    display: flex;
}

.searchTerm {
    width: 100%;
    border: 3px solid #089da1;
    border-right: none;
    padding: 5px;
    height: 20px;
    border-radius: 5px 0 0 5px;
    outline: none;
    color: #9DBFAF;
}

.searchTerm:focus {
    color: #000000;
}

.searchButton {
    width: 40px;
    height: 20px;
    border: 1px solid #089da1;
    background: #089da1;
    text-align: center;
    color: #fff;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
    font-size: 20px;
}


.wrap {
    width: 30%;
    position: absolute;
    top: 50%;
    margin-left: 200px;
    transform: translate(-50%, -50%);
}


.user{
    margin-right: 0px;
    margin-left: 25px;
}

.user a{
    color: #089da1;
}

.input-group{
    margin-top: 40px;
    margin-left: 350px;
}

.input-group [type="submit"]{
    width: 90px;
    padding: 10px;
    margin-right: 5px;
    border: 1px solid #089da1;
    border-radius: 5px;
    background-color: white;
}

.input-group [type="button"]{
     width: 90px;
    padding: 10px;
    border: 1px solid #089da1;
    border-radius: 5px;
    background-color: white;
}


/*main*/
section .main {
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: relative;
    top: -8%;
}

section .main h1 {
    position: relative;
    font-size: 55px;
    top: 80px;
    left: 50px;
}

section .main h1 span {
    color: #089da1;
}

section .main p {
    width: 650px;
    text-align: justify;
    line-height: 22px;
    position: relative;
    top: 100px;
    left: 50px;
}

section .main .main_tag .main_btn {
    background: #089da1;
    padding: 10px 20px;
    position: relative;
    top: 130px;
    left: 50px;
    color: #fff;
    text-decoration: none;
}

section .main .main_img img {
    width: 500px;
    height: 55vh;
    position: relative;
    top: 120px;
   margin-left: 80px;
}

/*category*/
.category {
    padding: 5px;
    text-align: center;
    margin-bottom: 50px;
    margin-left: 35px;
    margin-right: 30px;
}

.category ul {
    clear: both;
    margin: 15px 0 20px;
    padding:0;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.category h2{
    margin-top: 150px;
    margin-bottom: 20px;
}

.coll-3 ul li {
    width: 30%;
    margin-left: 25px;
}

.category li {
    font-size: 0.9em;
    font-weight: 500;
    line-height: 1.3em;
    text-align: center;
    background: #ffffff;
    border-radius: 5px;
    margin: 5px 0;
    box-sizing: border-box;
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    padding: 10px 0 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.category li a {
    display: block;
    text-decoration: none;
    color: #333;
   
}

.category .fa-solid {
    font-size: 25px;
    margin-top: 20px;
    margin-bottom: 10px;
    color: #089da1;
}
.category li  {
     margin-top: 100px;
    margin: 5px 20px;
    width: 35px;
    height: 110px;
    fill: #089da1;
    display: inline-block;
}

.category li span {
    display: block;
    padding: 0 3px;
}




/*servis/layanan*/

.services {
    width: 100%;
    height: auto;
    margin: 35px 0;
}

.services .services_box {
    width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.services .services_box .services_card {
    text-align: center;
    width: 310px;
    height: auto;
    box-shadow: 0 0 8px #089da1;
    padding: 15px 10px;
}

.services .services_box .services_card i {
    color: #089da1;
    font-size: 45px;
    margin-bottom: 15px;
    cursor: pointer;
}

.services h2{
    margin-bottom:20px ;
    text-align: center;
}

.services .services_box .services_card h3 {
    margin-bottom: 10px;
}


/*Produk Obat*/

.featured_boks {
    width: 100%;
    height: 100vh;
    padding: 70px 0;
}

.featured_boks h1 {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
    font-size: 45px;
}

.featured_boks .featured_obat_box {
    width: 95%;
    height: 60vh;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    overflow: hidden;
    overflow-x: scroll;
}

.featured_boks .featured_obat_box .featured_obat_card {
    width: 250px;
    height: 420px;
    text-align: center;
    padding: 5px;
    border: 1px solid #919191;
    margin: auto 20px;
}

.featured_boks .featured_obat_box .featured_obat_card:hover {
    box-shadow: 0 0 5px #089da1;
}

.featured_boks .featured_obat_box .featured_obat_card .featurde_obat_img img {
    width: 150px;
    margin-top: 20px;
}

.featured_boks .featured_obat_box .featured_obat_card .featurde_obat_tag h2 {
    margin: 12px;
}

.featured_boks .featured_obat_box .featured_obat_card .featurde_obat_tag .writer {
    color: #919191;
}

.featured_boks .featured_obat_box .featured_obat_card .featurde_obat_tag .categories {
    color: #089da1;
    margin-top: 8px;
}

.featured_boks .featured_obat_box .featured_obat_card .featurde_obat_tag .obat_price {
    margin-top: 8px;
    font-weight: bold;
    margin-bottom: 30px;
}

.featured_boks .featured_obat_box .featured_obat_card .featurde_obat_tag .obat_price sub {
    font-weight: 100;
    padding: 0 5px;
}

.featured_boks .featured_obat_box .featured_obat_card .featurde_obat_tag .f_btn {
    padding: 8px 20px;
    border: 2px solid #089da1;
    text-decoration: none;
    color: #000;
}

::-webkit-scrollbar {
    width: 10px;
    height: 5px;
}

::-webkit-scrollbar-track {
    box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.2);
}

::-webkit-scrollbar-thumb {
    background: #089da1;
    border-radius: 10px;
}



/*footer*/

footer {
    position: fixed;
    bottom: 0;
}

@media (max-height:800px) {
    footer {
        position: static;
    }

    header {
        padding-top: 40px;
    }
}


.footer-distributed {
    display: flex;
    box-shadow: 0 0 10px #089da1;
    background-color: #ffffff;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
    width: 30%;
    margin-left: 50px;
}

.footer-distributed h3 {
    color: #000000;
    font-size: 40px;
    margin: 0;
    margin-left: 28px;
}

/*logo */

.footer-distributed .footer-left img {
    width: 50%;
    border-radius: 20px 20px;
}

.footer-distributed h3 span {
    color: #000000;

}

/* Footer links */

.footer-distributed .footer-links {
    margin-left: 200px;
    color: #000000;
    margin: 20px 0 12px;
}

.footer-distributed .footer-links a {
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: inherit;
}

.footer-distributed .footer-company-name {
    color: #000000;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
    width: 35%;
}


.footer-distributed .footer-center i {
    background-color: #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
    margin-left: 50px;
}

.footer-distributed .footer-center i.fa-envelope {
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p {
    display: inline-block;
    color: #000000;
    vertical-align: middle;
    margin: 0;
}

.footer-distributed .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
}

.footer-distributed .footer-center p a {
    color: #000000;
    text-decoration: none;
    ;
}


/* Footer Right */

.footer-distributed .footer-right {
    width: 30%;
}



.footer-distributed .footer-company-about {
    line-height: 20px;
    color: #000000;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
    margin-right: 30px;
}

.footer-distributed .footer-company-about span {
    display: block;
    color: #000000;
    font-size: 18px;
    font-weight: bold;
    margin-right: 2px;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons {
    margin-top: 25px;

}

.footer-distributed .footer-icons a {
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    

    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;

    margin-right: 3px;
    margin-bottom: 5px;

}

@media (max-width: 880px) {

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }

    .footer-distributed .footer-center i {
        margin-left: 0;
    }

}
    </style>
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
            <li><a href="#">Produk</a></li>
            <li><a href="transaksi.html">Transaksi</a></li>
            <li><a href="#">Hubungi kami</a></li>
            <li><a href="#">Bantuan</a></li>
        </ul>
      <div class="wrap">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Cari obat...">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
            <div class="user">
            <a href="{{ route('profile') }}"><i class="fa-solid fa-user"></i></a>
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
                <a href="transaksi.html" class="f_btn">Beli</a>
                <a href="keranjang.html" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/promag.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>Promag Tablet</h4>
                <p class="obat_price">Rp 7.987<sub><del>Rp 9.500</del></sub></p>
                <a href="transaksi.html" class="f_btn">Beli</a>
                <a href="keranjang.html" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/neurobion.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>Neurobion Forte Fc Tablet </h4>
                <p class="obat_price">Rp 50.511<sub><del>Rp 53.100</del></sub></p>
                <a href="transaksi.html" class="f_btn">Beli</a>
                <a href="keranjang.html" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/sakatonik.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>Sakatonik Activ Syr 100ml</h4>
                <p class="obat_price">Rp 15.079<sub><del>Rp 16.600,</del></sub></p>
                <a href="transaksi.html" class="f_btn">Beli</a>
                <a href="keranjang.html" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/paracetamol.webp">
            </div>

            <div class="featurde_obat_tag">
                <h4>Paracetamol Rama 500mg Kaplet</h4>
                <p class="obat_price">Rp 4.402<sub><del>Rp 5.500,</del></sub></p>
                <a href="transaksi.html" class="f_btn">Beli</a>
                <a href="keranjang.html" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/salbutamol sirup.webp">
            </div>

            <div class="featurde_obat_tag">
                <h4>Lasal Exp Sirup 100ml</h4>
                <p class="obat_price">Rp 61.710<sub><del>Rp 63.450</del></sub></p>
                <a href="transaksi.html" class="f_btn">Beli</a>
                <a href="keranjang.html" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/sangobion2.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>Sangobion Kapsul </h4>
                <p class="obat_price">Rp 21.174<sub><del>Rp 22.500</del></sub></p>
                <a href="transaksi.html" class="f_btn">Beli</a>
                <a href="keranjang.html" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/vitamin b.webp">
            </div>

            <div class="featurde_obat_tag">
                <h4>Vitamin B Comp Ipi Tablet</h4>
                <p class="obat_price">Rp 6.516<sub><del>Rp 7.250</del></sub></p>
                <a href="transaksi.html" class="f_btn">Beli</a>
                <a href="keranjang.html" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/panadol.png">
            </div>

            <div class="featurde_obat_tag">
                <h4>Panadol Extra Tablet</h4>
                <p class="obat_price">Rp 14.623<sub><del>Rp 15.000</del></sub></p>
                <a href="transaksi.html" class="f_btn">Beli</a>
                <a href="keranjang.html" class="f_btn">Keranjang</a>
            </div>

        </div>

        <div class="featured_obat_card">

            <div class="featurde_obat_img">
                <img src="asset/sanmol.jpg">
            </div>

            <div class="featurde_obat_tag">
                <h4>Sanmol Sirup 120mg/5ml</h4>
                <p class="obat_price">Rp 21.938<sub><del>Rp 22.300</del></sub></p>
                <a href="transaksi.html" class="f_btn">Beli</a>
                <a href="keranjang.html" class="f_btn">Keranjang</a>
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
                    <a href="transaksi.html" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/panadol.png">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Panadol Extra Tablet</h4>
                    <p class="obat_price">Rp 14.623</p>
                    <a href="transaksi.html" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/vitamin b.webp">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Vitamin B Comp Ipi Tablet</h4>
                    <p class="obat_price">Rp 6.516</p>
                    <a href="transaksi.html" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/paracetamol.webp">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Paracetamol Rama 500mg Kaplet</h4>
                    <p class="obat_price">Rp 4.402</p>
                    <a href="transaksi.html" class="f_btn">Beli</a>
                </div>

            </div>


            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/promag.jpg">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Promag Tablet</h4>
                    <p class="obat_price">Rp 7.987</p>
                    <a href="transaksi.html" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/neurobion.jpg">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Neurobion Forte Fc Tablet </h4>
                    <p class="obat_price">Rp 50.511</p>
                    <a href="transaksi.html" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/sakatonik.jpg">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Sakatonik Activ Syr 100ml</h4>
                    <p class="obat_price">Rp 15.079</p>
                    <a href="transaksi.html" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/paracetamol.webp">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Paracetamol Rama 500mg Kaplet</h4>
                    <p class="obat_price">Rp 4.402</p>
                    <a href="transaksi.html" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/salbutamol sirup.webp">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Lasal Exp Sirup 100ml</h4>
                    <p class="obat_price">Rp 61.710</p>
                    <a href="transaksi.html" class="f_btn">Beli</a>
                </div>

            </div>

            <div class="featured_obat_card">

                <div class="featurde_obat_img">
                    <img src="asset/sangobion2.jpg">
                </div>

                <div class="featurde_obat_tag">
                    <h4>Sangobion Kapsul </h4>
                    <p class="obat_price">Rp 21.174</p>
                    <a href="transaksi.html" class="f_btn">Beli</a>
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

