<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ActivityType;
use App\Models\Locale;

class Activity extends Model
{
    public function activityTypes()
    {
        return $this->belongsTo(ActivityType::class);
    }

    public function locales()
    {
        return $this->belongsTo(Locale::class);
    }

}
