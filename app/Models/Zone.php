<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Commodity;

class Zone extends Model
{
    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function commodities()
    {
        return $this->hasMany(Commodity::class);
    }

}
