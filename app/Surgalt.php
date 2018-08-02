<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surgalt extends Model
{
	protected $table = 'surgalt';

	protected $fillable = [];

    public function grade(){
        return $this->belongsTo('App\Grade');
    }

    public function level(){
        return $this->belongsTo('App\Level');
    }

    public function surgaltType(){
        return $this->belongsTo('App\SurgaltType', 'type_id');
    }

    public function salbaruud(){
        return $this->belongsToMany('App\Salbar');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
