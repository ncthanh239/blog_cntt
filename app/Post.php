<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title', 'img_id', 'description', 'content', 'category_id', 'slug'];

	public static function store ($data){
		$post=Post::create($data);
		return $post;

	}
	public static function updateData($id,$data){
		$post=Post::find($id);
		$post->update($data);
		return $post;
	}

}
