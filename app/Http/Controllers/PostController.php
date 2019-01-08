<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Event;
use App\Post;
use App\Category;
use App\Imgs;
use Yajra\Datatables\Datatables;

class PostController extends Controller
{
	public $posts;
	public function __construct(){
		$this->post=new Post;
	}

	public function index(){
		$a=[];
		$aaa=[];
		$bbb=[];
		$ccc=[];
		$b=[];
		$ddd=[];
		$eee=[];
		$fff=[];
		$posts = Post::all();
		$phps = Post::where('category_id',3)->get();

		foreach ($phps as $key => $php) {
			$img1=Imgs::where('post_id',$php->id)->get();

			foreach ($img1 as $key1 => $value) {
				$ddd[$key1]=$php->link_img;
			}
			$ddd[$php->id]=$eee;
			$b[$key]=$ddd;

		}

		foreach ($phps as $key2 => $php) {
			$fff['id']=$php->id;
			$fff['title']=$php->title;
			$fff['description']=$php->description;
			$fff['content']=$php->content;
			$fff['slug']=$php->slug;
			$fff['category']=Category::where('id',$php->category_id)->get();
			$fff['img']=Imgs::where('post_id',$php->id)->paginate();
			$fff['updated_at']=$php->updated_at;

			$data1[$key2]=$fff;
		}



		/////////////////////////////////////////////////////
		
		foreach ($posts as $key => $post) {
			$imgs=Imgs::where('post_id',$post->id)->get();

			foreach ($imgs as $key1 => $value) {
				$bbb[$key1]=$post->link_img;
			}
			$ccc[$post->id]=$bbb;
			$a[$key]=$ccc;

		}

		foreach ($posts as $key2 => $post) {
			$aaa['id']=$post->id;
			$aaa['title']=$post->title;
			$aaa['description']=$post->description;
			$aaa['content']=$post->content;
			$aaa['slug']=$post->slug;
			$aaa['category']=Category::where('id',$post->category_id)->get();
			$aaa['img']=Imgs::where('post_id',$post->id)->paginate();
			$aaa['updated_at']=$post->updated_at;

			$data[$key2]=$aaa;
		}
		// dd($data);
		
		// dd($data['0']['category']->first()->name);
		// dd($data['0']['img']->first()->link_img);
		return view('index',['data'=>$data],['data1'=>$data1]);



	}
		

	public function list(){ //phương thức hiển thị trang post
		$cates=Category::all();//lấy hết dữ liệu của Category
		return view('admin.post.post', compact('cates'));//trả về trang post kéo theo biến cates
	}

	public function getPosts(){ //phương thức lấy dữ liệu của bảng Post theo datatable
		return Datatables::of(Post::query())
		->addColumn('action', function ($post) { //thêm cột với các nút chức năng
			return '<button class="btn btn-sm btn-primary btn-post" data-id="'.$post->id.'"><i class="fa fa-eye" aria-hidden="true"></i></button>
			<button class="btn btn-sm btn-warning btn-edit" data-id="'.$post->id.'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
			<button class="btn btn-sm btn-info btn-uploada" data-id="'.$post->id.'"><i class="fa fa-upload" aria-hidden="true"></i></button>
			<button class="btn btn-sm btn-danger" data-id="'.$post->id.'"><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
		})

		->rawColumns(['action'])
		->make(true);
	}

	public function create(){ //phương thức khởi tạo hiển thị form create một bài viết

		return view('admin.post.post');
	}

	public function store(Request $request){ //phương thức thêm một bài viết vào database

// dd($request->all());

		$data=$request->all(); //khởi tạo biến data lấy hết dữ liệu từ request
		
		$data['slug']=str_slug($request->title);//khởi tạo slug cắt từ title
		
		
		$data['content']=$request->content;
		
		$post = Post::create($data);//thêm bài viết vào database
		return response()->json([  //trả về json
			'data'=>$post
		]);		
	}

	public function destroy(Request $request,$id) //phương thức xóa bài viết
	{
		Post::find($id)->delete(); //câu lệnh lấy ra bài viết dựa vào id sau đó xóa
		return response()->json([ //trả về json
			'message'=>'Da xoa',
		]);
	}


	public function detail($slug)
    {	
    	$aaa=[];
    	$a=[];
		$ddd=[];
		$bbb=[];
		$ccc=[];
		$post1 = Post::all();

		foreach ($post1 as $key => $post) {
			$imgs=Imgs::where('post_id',$post->id)->get();

			foreach ($imgs as $key1 => $value) {
				$bbb[$key1]=$post->link_img;
			}
			$ccc[$post->id]=$bbb;
			$a[$key]=$ccc;

		}

		foreach ($post1 as $key2 => $post) {
			$ddd['id']=$post->id;
			$ddd['title']=$post->title;
			$ddd['description']=$post->description;
			$ddd['content']=$post->content;
			$ddd['slug']=$post->slug;
			$ddd['category']=Category::where('id',$post->category_id)->get();
			$ddd['img']=Imgs::where('post_id',$post->id)->paginate();
			$ddd['updated_at']=$post->updated_at;

			$data2[$key2]=$ddd;
		}
		// dd($data2);







        $post = Post::where('slug',$slug)->first();
      

        // dd($post->id);
        $aa=$post->id;
        // dd($aa);
        $img=Imgs::where('post_id', $aa)->get()->first()->link_img;
       
		// dd($img);
        	$aaa['id']=$post->id;
			$aaa['title']=$post->title;
			$aaa['description']=$post->description;
			$aaa['content']=$post->content;
			$aaa['slug']=$post->slug;
			$aaa['category']=Category::where('id',$post->category_id)->get();
			$aaa['img']=$img;
			$aaa['updated_at']=$post->updated_at;

 // dd($aaa);
			

        
        return view('single',['aaa'=> $aaa], ['data2'=>$data2]);
    }

   

	
}
