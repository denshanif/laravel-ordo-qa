<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'price', 'prod_date'];

    public function manufacture(): HasOne
    {
        return $this->hasOne(Manufacture::class);
    }
}
