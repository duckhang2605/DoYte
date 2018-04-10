<?php  
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

/**
* 
*/
class searchController extends Controller
{
	
	public function search(Request $Request){
		$key = $Request->key;
		$product = DB::table('tbl_product')->where('c_name','like',"%$key%")->get();
		return view('frontend.search',['product'=>$product,'key'=>$key],compact('product'));
	}
}