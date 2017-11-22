<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Locale;


class Country extends Model
{
    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function locales()
    {
        return $this->belongsTo(Locale::class);
    }

}
