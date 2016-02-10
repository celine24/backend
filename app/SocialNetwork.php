<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model {

	protected $table = 'socialnetwork';
	public $timestamps = true;
	protected $fillable = array('name');

	public function userSocialNetwork()
	{
		return $this->belongsTo('UserSocialNetwork');
	}

}