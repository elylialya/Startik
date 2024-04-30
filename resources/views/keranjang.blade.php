<!--By Rindu Husnul Khotimah-->
<!DOCTYPE html>
<html>

<head>
    <title>Keranjang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/keranjang.css')}}">
</head>
<body>

    <section>
        <div class="container">
            <h2 class="px-5 p-2">Keranjang</h2>
            <div class="cart">
                <div class="col-md-12 col-lg-10 mx-auto">
                    <div class="cart-item">
                        <div class="row">
                            <div class="col-md-7 center-item">
                                <img src="asset/paracetamol1.jpeg" alt="">
                                <h5>Paracetamol 500 mg<br> 
                                    (Rp.25000)</h5>
                            </div>

                            <div class="col-md-5 center-item">
                                <div class="input-group number-spinner">
                                    <button id="paracetamol-minus" class="btn btn-default"><i
                                            class="fas fa-minus"></i></button>
                                    <input id="paracetamol-number" type="number" min="0"
                                        class="form-control text-center" value="1">
                                    <button id="paracetamol-plus" class="btn btn-default"><i
                                            class="fas fa-plus"></i></button>
                                </div>
                                <h5>Rp <span id="paracetamol-total">25000</span> </h5>

                            </div>
                        </div>
                    </div>

                    <div class="cart-item">
                        <div class="row">
                            <div class="col-md-7 center-item mx-auto">
                                <img src="asset/obat.jpeg" alt="">
                                <h5>Woods 100 ml<br>
                                    ( Rp.20000 )</h5>
                            </div>
                            <div class="col-md-5 center-item">
                                <div class="input-group number-spinner">
                                    <button id="obat-minus" class="btn btn-default"><i
                                            class="fas fa-minus"></i></button>
                                    <input id="obat-number" type="number" min="0" class="form-control text-center"
                                        value="1">
                                    <button id="obat-plus" class="btn btn-default"><i class="fas fa-plus"></i></button>

                                </div>
                                <h5>Rp <span id="obat-total">20000</span> </h5>

                            </div>
                        </div>
                    </div>

                    <div class="cart-item">
                        <div class="row g-2">

                            <div class="col-6">
                                <h5>Total:</h5>
                            </div>

                            <div class="col-6 status">
                                <h5>Rp<span id="total-price">45000</span></h5>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12 pt-4 pb-4">
                        <button type="button" class="btn btn-success check-out"><a href="transaksi.html">Lakukan Pembayaran</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function upadateCaseNumber(product, price, isIncreasing) {
            const caseInput = document.getElementById(product + '-number');
            let caseNumber = caseInput.value;
            if (isIncreasing) {
                caseNumber = parseInt(caseNumber) + 1;
            }

            else if (caseNumber > 0) {
                caseNumber = parseInt(caseNumber) - 1;
            }

            caseInput.value = caseNumber;
            // update case total 
            const caseTotal = document.getElementById(product + '-total');
            caseTotal.innerText = caseNumber * price;
            calculateTotal();
        }


        function getInputvalue(product) {
            const productInput = document.getElementById(product + '-number');
            const productNumber = parseInt(productInput.value);
            return productNumber;
        }
        function calculateTotal() {
            const paracetamolTotal = getInputvalue('paracetamol') * 25000;
            const obatTotal = getInputvalue('obat') * 20000;
            const totalPrice = paracetamolTotal + obatTotal;

            // update on the html 

            document.getElementById('total-price').innerText = totalPrice;

        }



        document.getElementById('obat-plus').addEventListener('click', function () {
            // const caseInput = document.getElementById('case-number');
            // const caseNumber = caseInput.value;
            // caseInput.value = parseInt(caseNumber) + 1;
            upadateCaseNumber('obat', 20000, true);
        });

        document.getElementById('obat-minus').addEventListener('click', function () {
            // const caseInput = document.getElementById('case-number');
            //     const caseNumber = caseInput.value;
            //    if(caseInput.value > 1){
            //         caseInput.value = parseInt(caseNumber) - 1;
            //    }
            upadateCaseNumber('obat', 20000, false);
        });

        // phone prcie update using add event linstner 
        document.getElementById('paracetamol-plus').addEventListener('click', function () {
            upadateCaseNumber('paracetamol', 25000, true);
        });


        document.getElementById('paracetamol-minus').addEventListener('click', function () {
            upadateCaseNumber('paracetamol', 25000, false);
        });


        document.getElementById('phone-minus').addEventListener('click', function () {
            upadateCaseNumber('phone', 25000, false);
        });
    </script>
</body>

</html>