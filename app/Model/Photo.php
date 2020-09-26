<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
		'post_id',
		'img_url',
	];
}
