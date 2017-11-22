<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Zone;
use App\Models\Locale;

class Commodity extends Model
{
    
    public function zones()
    {
        return $this->belongsTo(Zone::class);
    }

    public function locales()
    {
        return $this->belongsTo(Locale::class);
    }

}
