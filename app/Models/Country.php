<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'phone_code'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function currency()
    {
        return $this->hasOne(Currency::class);
    }
}