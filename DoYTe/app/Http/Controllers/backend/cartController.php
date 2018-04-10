<?php  
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB,Cart;

/**
* 
*/
class cartController extends Controller
{
	
	public function muahang($id){
	$product = DB::table("tbl_product")->where('pk_product_id',$id)->first();
	Cart::add(array('id'=>$id,'name'=>$product->c_name,'qty'=>1,'price'=>$product->c_price,'options'=>array('img'=>$product->c_img)));
	$content = Cart::content();
	// cho den route gio hang
	return redirect()->route('giohang');
	}
	public function giohang(){
		// de do su lieu ra
		$content = Cart::content();
		$total = Cart::total();
		return view('frontend.cart',compact('content','total'));
	}
	public function xoa($id){
		Cart::remove($id);
		return redirect()->route('giohang');
	}
}