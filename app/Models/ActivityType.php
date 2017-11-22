<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;
use App\Models\Locale;

class ActivityType extends Model
{
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function locales()
    {
        return $this->belongsTo(Locale::class);
    }

}
