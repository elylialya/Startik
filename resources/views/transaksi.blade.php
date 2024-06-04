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
        @if(session('success'))
        <p id="popup" style="color: green">Transaksi Sukses</p>
        @endif
    <div class="y">
    <div class="img">
        <img src="{{ asset('storage/' . $data->image) }}" width="100">
    </div>
    <form action="/transaction" method="post">
        @csrf
        @method('post')   
        <div class="input">
            <input type="text" class="nama-produk" placeholder="Nama Produk" style="width: 200px; border-radius: 5px;" value="{{ $data->title }}" name="produk"> <br> <br>
            <input type="text" class="harga" placeholder="Harga"  style="width: 200px; border-radius: 5px;" value="{{ $data->price }}" id="harga" name="harga"> <br><br>
            <input type="text" class="jumlah-produk" placeholder="Jumlah Produk"  style="width: 200px; border-radius: 5px;" id="jumlah" name="jumlah"> 
        </div>
        </div>
    
        <div class="inp" >
            <input type="text" class="total-pemesanan" placeholder="Total Pemesanan" style="width: 650px; height: 30px; margin-left: 25px; border-radius: 10px;" id="total" name="total"> <br> <br>
            <input type="text" class="metode-pembayaran" placeholder="Metode Pembayaran" value="COD" disabled style="width: 650px; height: 30px; margin-left: 25px; border-radius: 10px;" name="metode" id="metode"> <br> <br>
            <input type="text" class="alamat-penerima" placeholder="Alamat Penerima" style="width: 650px; height: 100px; margin-top: 20px; margin-left: 25px; border-radius: 10px;" id="alamat" name="alamat">
        </div>
        
        <div class="button">
            <button type="button" onclick="totalHarga()"><i class="fa-solid fa-cart-shopping"></i> Total Pembayaran</button>
            <button type="submit"><i class="fa-solid fa-cart-shopping"></i> Buat Pesanan</button>
        </div>
    </form>
    </div>

<script src="{{ asset('js/transaksi.js') }}"></script>
</body>     
</html>