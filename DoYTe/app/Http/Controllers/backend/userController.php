<?php 
	namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//muốn sử dụng đối tượng nào ở trong controller thì phải khai báo để sử dụng
//thao tác với csdl
use DB;
//ma hoa
use Hash;

/**
* 
*/
class userController extends Controller
{
	public function list_user(){
		// lay ban ghi trong table user, phan loai ban ghi hien thi tren 1 trang
	$data["arr"] = DB::table("users")->orderby("id","desc")->paginate(4);
	// return view va truyen vao du lieu ra view
	return view('backend.list_user',$data);
	}
	public function edit($id){
		// lay ban ghi co id truyrn vao 
		$data["arr"] = DB::table("users")->where("id","=",$id)->first();
		return view("backend.add_edit_user",$data);
	}
	public function do_edit(Request $request,$id){
		$name = $request->name;
		$password = $request->password;
		// update ban ghi co id truyen vao
		DB::table("users")->where('id','=',$id)->update(array('name'=>$name));
		// neu password khong null thi update 
		if($password != ""){
			$password = Hash::make($password);
			// update ban ghi truyen vao
			DB::table('users')->where('id','=',$id)->update(array('password'=>$password));
		}
		return redirect(url('admin/user'));
	}
	public function add(){
		return view("backend.add_edit_user");
	}
	public function do_add( Request $request){
		 $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        //insert ban ghi vao csdl
        DB::table("users")->insert(array("name"=>$name,"email"=>$email,"password"=>$password));
        return redirect(url('admin/user'));
	}
	public function delete($id){
		
	}

}
