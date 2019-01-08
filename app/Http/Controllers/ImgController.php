<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Imgs;
class ImgController extends Controller
{
    public function create($id){//phương thức hiển thị thêm mới ảnh theo id bài viết
			$post=Post::find($id); //truy vấn lấy ra bài viết dựa theo id
			
			return view('admin.post.post',['post'=>$post]); //trả về trang hiển thị post
		}
	public function upload(Request $request){//phương thức upload ảnh
		// dd($request->file);
	   	
	   		$path=$request->file->storeAs('posts', 'image_'. time().'.png');//đường dẫn ảnh
	   		// dd($path);

	   		Imgs::insert([//khởi tạo ảnh vào DB
	   			'post_id'=>$request->post_id,
	   			'link_img'=>$path,
	   			
	   		]);

	   		return response()->json('ok');//trả về json
	   }
}
