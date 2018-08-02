<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setgegdel extends Model
{
	protected $table = 'setgegdel';

	protected $fillable = [];

	public function getLatest(){

        $setgegdel = Self::latest()->first();

        return $setgegdel;
	}
}
