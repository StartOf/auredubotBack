<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\ActivityType;
use App\Models\Activitie;
use App\Models\Getaway;
use App\Models\Commoditie;

class Locale extends Model
{
    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function contries()
    {
        return $this->hasMany(Country::class);
    }

    public function activityTypes()
    {
        return $this->hasMany(ActivityType::class);
    }

    public function activities()
    {
        return $this->hasMany(Activitie::class);
    }

    public function getaways()
    {
        return $this->hasMany(Getaway::class);
    }

    public function commodities()
    {
        return $this->hasMany(Commoditie::class);
    }
}
