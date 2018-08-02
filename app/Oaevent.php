<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oaevent extends Model
{
	protected $table = 'oaevents';

	protected $fillable = [];

	public function getLatest(){

        $events = Self::latest()->limit(3)->get();

        return $events;
	}

    public function shorten($num = 100){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }
}
