<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salbar extends Model
{
	protected $table = 'salbar';

	protected $fillable = [];

	public function surgaltuud(){
		return $this->belongsToMany('App\Surgalt');
	}

	public function images(){
		return $this->hasMany('App\SalbarImage', 'salbar_id');
	}
}
