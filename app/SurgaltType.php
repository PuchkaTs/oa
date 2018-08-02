<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurgaltType extends Model
{
	protected $table = 'surgalt_type';

	protected $fillable = [];

    public function surgalt(){
        return $this->hasMany('App\Surgalt', 'type_id');
    }
}
