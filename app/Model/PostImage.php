<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable = [
		'post_id',
		'img_url',
	];
}
