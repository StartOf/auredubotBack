<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Getaway;

class GetawaysPlace extends Model
{
    public function getaways()
    {
        return $this->hasMany(Getaway::class);
    }

}
