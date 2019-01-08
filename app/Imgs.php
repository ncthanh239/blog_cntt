<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgs extends Model
{
    protected $fillable = ['post_id', 'link_img'];
}
