<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
	protected $table = 'galleryimage';

	protected $fillable = [];

	public function gallery(){
		return $this->belongsTo('App\Gallery', 'gallery_id');
	}
}
