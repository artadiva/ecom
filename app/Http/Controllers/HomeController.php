<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class HomeController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$products_join = DB::table('products')
    					->leftjoin('discounts','products.id' ,'=','discounts.id_product')
    					->select('products.*', 'discounts.id_product', 'discounts.percentage', 'discounts.start','discounts.end')
                        ->whereRaw('Date(discounts.start) <= CURDATE() AND Date(discounts.end) >= CURDATE()')
                        ->distinct()
    					->get();
 
    	// mengirim data pegawai ke view index
    	return view('welcome',['products' => $products_join]);
 
    }
}
// NOW() >= DATE(`discounts`.`start`) AND NOW() <= DATE(`discounts`.`end`)
