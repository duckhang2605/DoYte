<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class newsContrller extends Controller
{
    public function list_news(){

			// lay tat ca ca ban ghi roi phan trang ban ghi
			$data["arr"] = DB::table("tbl_news")->orderby("pk_news_id","desc")->paginate(6);
			// goi view ra roi load
			return view("backend.list_news",$data);
		
    }
    public function edit($id){
    	// lay ban ghi vo id truyen vao
    	$data["arr"]= DB::table("tbl_news")->where("pk_news_id","=",$id)->first();
    	return view("backend.add_edit_news",$data);
    }
    public function do_edit(Request $Request,$id){
        $c_description = $Request->c_description;
    	$c_name = $Request->c_name;
        $c_content = $Request->c_content;
        $c_hotnews = $Request->c_hotnews !=""?1:0;
        // update ban ghi co id truyen vao
        DB::table("tbl_news")->where("pk_news_id","=",$id)->update(array("c_name"=>$c_name,"c_description"=>$c_description,"c_content"=>$c_content,"c_hotnews"=>$c_hotnews));
        // kiem tra new user browse anh thi thuc hien update anh
        if($Request->hasFile("c_img")){
            // lay anh cu
            $arr_old_img = DB::table("tbl_news")->where("pk_news_id","=",$id)->select("c_img")->first();
            $old_img = isset($arr_old_img->c_img)?$arr_old_img->c_img:"";
            // thuc hien xoa anh cu
            if(file_exists("upload/news".$old_img) && $old_img !="")
                unlink("upload/news/".$old_img);
            // =========
            // lay ten anh 
            $c_img = $Request->file("c_img")->getClientOriginalName();
            $c_img = time().$c_img;
            // thuc hien update anh
            $Request->file("c_img")->move("upload/news",$c_img);
            // update duong dan anh 
            DB::table("tbl_news")->where("pk_news_id","=",$id)->update(array("c_img"=>$c_img));

        }
        return redirect(url('admin/new'));
    }
    public function add(){
        return view("backend.add_news");
    }
    public function do_add(Request $request){
         $c_name = $request->c_name;
        $c_description = $request->c_description;
        $c_content = $request->c_content;
        $c_hotnews = $request->c_hotnews != ""?1:0;
        $c_img = "";
        if($request->hasFile("c_img")){
            $c_img = $request->file("c_img")->getClientOriginalName();
            $c_img = time().$c_img;
            // thuch ieen ipdate anh
            $request->file("c_img")->move("upload/news",$c_img);
            $c_img= "upload/new/".$c_img;
        }
    // the ban ghi co so du lieu vao
        DB::table("tbl_news")->insert(array("c_name"=>$c_name,"c_description"=>$c_description,"c_content"=>$c_content,"c_hotnews"=>$c_hotnews));
        return redirect(url('admin/new'));
    }
    public function delete(Request $request,$id){

        // lay danh sach anh cu
        $arr_old_img = DB::table("tbl_news")->where("pk_news_id","=",$id)->select("c_img")->first();
         $old_img = isset($arr_old_img->c_img)?$arr_old_img->c_img:"";
      
        // thuc hien xoa anh
        if(file_exists("upload/news/".$old_img) && $old_img !="")
            unlink("upload/news/".$old_img);
        // xoa ban ghi co id truyeen vao
        DB::table("tbl_news")->where("pk_news_id","=",$id)->delete();

        return redirect(url('admin/new'));
    }
}
