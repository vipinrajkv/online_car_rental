<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\FuelTypeEnum;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'car_name',
        'car_details',
        'category_id',
        'brand_id',
        'car_image',
        'fuel_type',
        'model_year',
    ];

    protected function Casts():array
    {
        return ['fuel_type' => FuelTypeEnum::class];
    }
}
