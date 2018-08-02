<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
	protected $table = 'productimage';

	protected $fillable = [];

	public function product(){
		return $this->belongsTo('App\Product', 'product_id');
	}
}
