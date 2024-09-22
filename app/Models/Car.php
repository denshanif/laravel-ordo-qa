<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'price', 'prod_date'];

    public function manufacture(): HasOne
    {
        return $this->hasOne(Manufacture::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class, 'car_features', 'car_id', 'feature_id');
    }
}
