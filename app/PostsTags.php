<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsTags extends Model {

	protected $table = 'posts_has_tags';
	public $timestamps = false;

}