<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalbarImage extends Model
{
	protected $table = 'salbarimages';

	protected $fillable = [];

	public function salbar(){
		return $this->belongsTo('App\Salbar', 'salbar_id');
	}
}
