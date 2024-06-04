<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/detailproduk.css') }}">
</head>

<body>


    </div>
    <div class="content">
        <form method="get" class="input">
            @method('get')
            @csrf
            <input type="text" class="nama-produk" id="barang" name="barang" placeholder="Nama Produk">
            <input type="number" class="harga" id="harga" name="harga" placeholder="Harga">
            <button>Cari</button>
        </form>
        <div class="text">
            <div class="row" style="position: relative; left: 215px; ">
                @foreach ($datas as $data)
                    <div class="col-sm-6" style="width: 22%;">
                        <div class="card" style="height: 420px;">
                            <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="..."
                                style="width: 60%;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->title }}</h5>
                                <p> {{ $data->description }} <br> Rp. {{ $data->price }}</p>
                                <a href="/transaksi/{{ $data->id }}"><i class="fa-solid fa-cart-shopping"></i> Keranjang</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-sm-6" style="width: 22%;">
                </div>

            </div>

</body>

</html>
