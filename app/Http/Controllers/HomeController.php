<?php
 
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        return view('home');
    }
 

    public function transaksi()
    {
        return view('transaksi');

    }

    public function keranjang()
    {
        return view('keranjang');
        
    }

    public function detailproduk()
    {
        $datas = Product::orderBy('created_at', 'DESC')->get();
        return view('detailproduk', [
            'datas' => $datas
        ]);
        
    }
    public function adminHome()
    {
        return view('dashboard');
    }

}