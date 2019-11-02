<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    function Party(){
    	return $this->belongsTo(Party::class);
    }

    function Count(){
    	return $this->belongsTo(count::class);
    }
}
