<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
	protected $table = 'grades';

	protected $fillable = ['title'];

    public function surgalt(){
        return $this->hasMany('App\Surgalt');
    }
}
