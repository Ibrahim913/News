<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    static function getName($id)
    {
    	$temp = self::find($id);
    	if(!empty($temp))
    		return $temp->name;
    	else
    		return "a7a";
    }
}
