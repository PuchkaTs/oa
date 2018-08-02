<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';

	protected $fillable = [];

	public function images(){
		return $this->hasMany('App\ProductImage', 'product_id');
	}

	public function getByPosition(){

        $gallery = Self::orderBy('position', 'asc')->with(array('images'=>function($query){
	        $query->limit(4);
	    }))->get();

        return $gallery;
	}

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }
}
