<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $table = 'news';

	protected $fillable = [];

	public function getLatest(){

        $news = Self::latest()->limit(3)->get();

        return $news;
	}

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }
}
