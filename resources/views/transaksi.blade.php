<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/transaksi.css')}}">
    <title>Transaksi</title>
</head>
<body>
    <h1>Transaksi</h1>
    <div class="container">
    <div class="y">
    <div class="img">
        <img src="obat 1.jpg">
    </div>
    <div class="input">
        <input type="text" class="nama-produk" placeholder="Nama Produk" style="width: 200px; border-radius: 5px;"> <br> <br>
        <input type="text" class="harga" placeholder="Harga"  style="width: 200px; border-radius: 5px;"> <br><br>
        <input type="text" class="jumlah-produk" placeholder="Jumlah Produk"  style="width: 200px; border-radius: 5px;"> 
    </div>
    </div>

    <div class="inp" >
        <input type="text" class="total-pemesanan" placeholder="Total Pemesanan" style="width: 650px; height: 30px; margin-left: 25px; border-radius: 10px;"> <br> <br>
        <input type="text" class="metode-pembayaran" placeholder="Metode Pembayaran" style="width: 650px; height: 30px; margin-left: 25px; border-radius: 10px;"> <br> <br>
        <input type="text" class="ongkos-kirim" placeholder="Ongkos Kirim" style="width: 650px; height: 30px; margin-left: 25px; border-radius: 10px;">
        <input type="text" class="alamat-penerima" placeholder="Alamat Penerima" style="width: 650px; height: 100px; margin-top: 20px; margin-left: 25px; border-radius: 10px;">
    </div>

    <div class="button">
        <button><i class="fa-solid fa-cart-shopping"></i> Total Pembayaran</button>
        <button><i class="fa-solid fa-cart-shopping"></i> Buat Pesanan</button>
    </div>
</div>
</body>     
</html>