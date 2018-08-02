<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $table = 'gallery';

	protected $fillable = [];

	public function images(){
		return $this->hasMany('App\GalleryImage', 'gallery_id');
	}

	public function getByPosition(){

        $gallery = Self::orderBy('position', 'asc')->with(array('images'=>function($query){
	        $query->limit(9);
	    }))->get();

        return $gallery;
	}


}
