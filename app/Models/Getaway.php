<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GetawayPlace;
use App\Models\Locale;

class Getaway extends Model
{
    
    public function getawayPlaces()
    {
        return $this->belongsTo(GetawayPlace::class);
    }

    public function locales()
    {
        return $this->belongsTo(Locale::class);
    }

}
