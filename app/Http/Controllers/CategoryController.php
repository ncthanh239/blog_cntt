<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\StoreCategoryRequest;
class CategoryController extends Controller
{
	public $cate;
	public function __construct(){
		$this->cate = new Category;
	}

	public function index(){
		$cates=Category::orderBy('id','desc')->simplePaginate(env('PAGES'));//lấy ra các category từ DB hiển thị giảm dần theo id và có phân trang


		return view('admin.category.category', ['cates'=>$cates]);//trả về view category và định nghĩa $cates ở bên view
	}

	public function create(){//hiển thị form thêm mới 1 category
		return view('admin.createCate');
	}

	public function store(StoreCategoryRequest $request){ // lưu category vừa tạo vào DB

		$data = $request;

		$data['slug'] = str_slug($data['name']);//cắt slug từ name
		$category=Category::store($request->all());//lưu dữ liệu vừa nhập vào DB
		return response()->json([//trả về json
			'error'=>false,
			'data'=>$category
		]);
	}

	public function destroy(Request $request,$id){
		Category::find($id)->delete();//Tìm kiếm rồi xóa category ở DB theo id
		return response()->json([ //trả về json sau khi thực hiện 
			'message'=>'Da xoa',
		]);

	}

	public function edit($id){
		return Category::find($id);
	}

	public function update(Request $request,$id){

		$data = $request;
		$data['slug'] = str_slug($data['name']);
		$category = Category::updateData($id, $request->all());

		return $category;
	}
}
