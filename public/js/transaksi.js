function totalHarga() {
    let harga = document.getElementById('harga').value
    let jumlah = document.getElementById('jumlah').value

    document.getElementById('total').value = harga * jumlah
}