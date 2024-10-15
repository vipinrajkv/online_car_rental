<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\FuelTypeEnum;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    /**
     * Get the category that owns the car
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class,'category_id','id');
    }

    /**
     * Get the brand that owns the car
     *
     * @return BelongsTo
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(brand::class,'brand_id','id');
    }

    protected function Casts():array
    {
        return ['fuel_type' => FuelTypeEnum::class];
    }

    /**
     * Get Available Cars for listing page
     *
     * @param array $categories
     * @param array $selectedDate
     * @return void
     */
    // public function getAvailableCars($startDate = null, $endDate = null, $srring)
    public function getAvailableCars(array $categories, array $selectedDate)
    {
        $startDate = $selectedDate['startDate'] ?? null;
        $endDate = $selectedDate['endDate'] ?? null;
        $query = $this->join('categories', 'cars.category_id', '=', 'categories.id')
        ->leftjoin('brands', 'cars.brand_id', '=', 'brands.id')
        // ->leftjoin('bookings', 'cars.id', '=', 'bookings.car_id')
        ->select('cars.*');

        if (!empty($startDate) && !empty($endDate)) {
            $query->leftjoin('bookings', 'cars.id', '=', 'bookings.car_id')
            ->selectRaw('CASE 
                WHEN bookings.car_id IS NOT NULL AND 
                     bookings.booking_from <= ? AND 
                     bookings.booking_to >= ? THEN "booked" 
                ELSE "available" 
            END as status', [$startDate, $endDate])
            ->addSelect('bookings.booking_from', 'bookings.booking_to'); 
        }
        if (!empty($categories)) {
            $query->whereIn('categories.id', $categories);
        }
        // dump($query->get()->all());
        // Execute the query
        return $query->get()->all();
    }
}
