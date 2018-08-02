<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
	protected $table = 'banners';

	protected $fillable = [];

	public function getByPosition(){

		$banners = Self::orderBy('position', 'asc')->get();

		return $banners;
	}
}
