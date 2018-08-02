<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
	protected $table = 'levels';

	protected $fillable = ['title'];

    public function surgalt(){
        return $this->hasMany('App\Surgalt');
    }
}
