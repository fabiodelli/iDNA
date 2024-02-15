<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description','features','dimension', 'price', 'rating', 'color_scheme'];

    public function images()
    {
        return $this->hasMany(SliderImage::class);
    }
}
