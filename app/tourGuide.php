<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tourGuide extends Model
{
    static function num()
    {
    	$temp = self::get();

    	return count($temp);
    }
}
