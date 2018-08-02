<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $table = 'abouts';

	protected $fillable = [];

	public function getByPosition(){

        $abouts = Self::orderBy('position', 'asc')->get();

        return $abouts;
	}
}
