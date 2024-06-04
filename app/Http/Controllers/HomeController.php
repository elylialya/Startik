<?php
 
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $products = Product::get();
        return view('home', [
            'products' => $products
        ]);
    }
 

    public function transaksi($id)
    {
        $data = Product::where('id', $id)->first();
        return view('transaksi', [
            'data' => $data
        ]);

    }

    public function keranjang()
    {
        return view('keranjang');
        
    }

    public function detailproduk(Request $request)
    {
        $productsQuery = Product::query();

        if ($request->input('barang')) {
            $productsQuery->where('title', 'like', '%' . $request->input('barang') . '%');
        }

        if ($request->input('harga')) {
            $productsQuery->where('price', 'like', '%' . $request->input('harga') . '%');
        }

        $datas = $productsQuery->get();

        return view('detailproduk', [
            'datas' => $datas
        ]);
    }

    public function adminHome()
    {
        $transactions = Transaction::get();
        return view('dashboard', [
            'transactions' => $transactions
        ]);
    }

}