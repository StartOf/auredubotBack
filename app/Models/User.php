<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Registration;
use App\Models\Comment;
use App\Models\Role;
use App\Models\Country;

class User extends Model
{
    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function roles()
    {
        return $this->belongsTo(Role::class);
    }

    public function countries()
    {
        return $this->belongsTo(Country::class);
    }

}
