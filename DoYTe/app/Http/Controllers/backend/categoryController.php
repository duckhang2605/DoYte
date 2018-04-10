<?php  
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

/**
* 
*/
class categoryController extends Controller
{
	public function list_category(){
		// lay danh sach ban ghi
		$data["arr"] = DB::table("tbl_category_product")->orderby("pk_category_product_id","desc")->paginate(8);
		return view('backend.list_category_news',$data);
	}
	public function edit($id){
		// lay ban ghi co id truyen vao
		$data["arr"] = DB::table("tbl_category_product")->where("pk_category_product_id","=",$id)->first();
		return view("backend.add_edit_category_news",$data);
	}
	public function do_edit(Request $request,$id){
		// su dung request de lay du lieu
		$c_name = $request->c_name;
		// update ban ghi 
		DB::table("tbl_category_product")->where("pk_category_product_id","=",$id)->update(array("c_name"=>$c_name));
		return redirect(url('admin/category'));
	}
	public function add(){
			return view("backend.add_category_news");
		}
		public function do_add( Request $request){
			$c_name = $request->c_name;
			//insert ban ghi
			DB::table('tbl_category_product')->insert(array("c_name"=>$c_name));
			return redirect(url('admin/category'));
		}
		public function delete(Request $request,$id){
			//xoa ban ghi co id truyen vao
			DB::table('tbl_category_product')->where("pk_category_product_id","=",$id)->delete();
			return redirect(url('admin/category'));
		}
	
}