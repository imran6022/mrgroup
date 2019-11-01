<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rawcottonpur extends Model
{
    public function Party()
    {
    	return $this->belongsTo(Party::class, 'party');
    }

    function RawType(){
    	return $this->belongsTo(RowcottonType::class, 'type');
    }
}
