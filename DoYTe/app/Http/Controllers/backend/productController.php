<?php  
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
 
 class productController extends Controller{
 	public function list_product(){
 		// lay cac ban ghi trong table user , phan trang ban ghi hien thi tren 1 trang
 		$data["arr"]= DB::table("tbl_product")->orderby("pk_product_id","desc")->paginate(5);
 		// goi view va truyen du lieu ra view
 		return view('backend.list_product',$data);

 	}
 	public function edit($id){
 		// lay ban ghi co id truyen vao
 		$data["arr"] = DB::table("tbl_product")->where("pk_product_id","=",$id)->first();
        $data["cate"] = DB::table("tbl_category_product")->get();
 		return view("backend.add_edit_product",$data);
 	}
 	public function do_edit(Request $request,$id){

 		$c_name = $request->c_name;
        $c_price = $request->c_price;
    	$fk_category_product_id = $request->fk_category_product_id;
    	$c_description = $request->c_description;
    	$c_content = $request->c_content;
    	$c_hotproduct = $request->c_hotproduct != ""?1:0;
    	// update ban ghi dc truyen vao
    	DB::table("tbl_product")->where("pk_product_id","=",$id)->update(array("c_name"=>$c_name,"fk_category_product_id"=>$fk_category_product_id,"c_description"=>$c_description,"c_price"=>$c_price,"c_content"=>$c_content,"c_hot"=>$c_hotproduct));
    	// kiem tra neu user browse anh thi thuc hien update anh
    	if($request->hasFile("c_img")){
    		// lay anh cu
    		$arr_old_img = DB::table("tbl_product")->where("pk_product_id","=",$id)->select("c_img")->first();
    		$old_img = isset($arr_old_img->c_img)?$arr_old_img->c_img:"";
    		// thuc hien xoa anh
    		if(file_exists("upload/product/".$old_img) && $old_img != "")
    			unlink("upload/product".$old_img);
    		// lay ten anh
    		$c_img = $request->file("c_img")->getClientOriginalName();
    		$c_img = time().$c_img;
    		// thuc hien viec upload anh
    			$request->file("c_img")->move("upload/product",$c_img);
    			// update duong dan anh
    			DB::table("tbl_product")->where("pk_product_id","=",$id)->update(array("c_img"=>$c_img));
                
    	}
    	
       return redirect(url('admin/product'));
 	}
    public function add(){
        return view("backend.add_product");
    }
    public function do_add(Request $request){
       $c_name = $request->c_name;
        $c_price = $request->c_price;
        $fk_category_product_id = $request->fk_category_product_id;
        $c_description = $request->c_description;
        $c_content = $request->c_content;
        $c_hotproduct = $request->c_hotproduct != ""?1:0;
        $c_img="";
        if ($request->hasFile("c_img")) {
            $c_img = $request->file("c_img")->getClientOriginalName();
            $c_img = time().$c_img;
            // var_dump($c_img2);
            // die;
            // thực hiện việc up load anh 
            $request->file("c_img")->move("upload/product",$c_img);
            $c_img= "upload/product/".$c_img;
        }
        // thêm bản ghi vào csdl
        DB::table("tbl_product")->insert(array("c_name"=>$c_name,"c_price"=>$c_price,"fk_category_product_id"=>$fk_category_product_id,"c_description"=>$c_description,"c_content"=>$c_content,"c_hot"=>$c_hotproduct,"c_img"=>$c_img));
        return redirect(url('admin/product'));
    }
    public function delete(Request $request,$id){

        // lay danh sach anh cu
        $arr_old_img = DB::table("tbl_product")->where("pk_product_id","=",$id)->select("c_img")->first();
         $old_img = isset($arr_old_img->c_img)?$arr_old_img->c_img:"";
        // thuc hien xoa anh
        if(file_exists("upload/product/".$old_img) && $old_img !="")
            unlink("upload/product/".$old_img);
        // xoa ban ghi co id truyeen vao
        DB::table("tbl_product")->where("pk_product_id","=",$id)->delete();
        return redirect(url('admin/product'));
    }
 }
