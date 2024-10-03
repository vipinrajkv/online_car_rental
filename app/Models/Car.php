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

    public function getAvailableCars($startDate = null,$endDate = null)
    {
        $query = DB::table('car_segments')
        ->join('categories', 'car_segments.category_id', '=', 'categories.id')
        ->join('brands', 'car_segments.brand_id', '=', 'brands.id')
        ->join('car_rents', 'car_segments.id', '=', 'car_rents.car_segment_id')
        ->leftJoin('bookings', 'car_segments.id', '=', 'bookings.car_segment_id') // Use LEFT JOIN to include bookings
        ->select('car_segments.*', 'categories.name as category_name', 'brands.name as brand_name')
        ->selectRaw('CASE 
            WHEN bookings.car_segment_id IS NOT NULL AND 
                 bookings.booking_from <= ? AND 
                 bookings.booking_to >= ? THEN "booked" 
            ELSE "available" 
        END as status', [$endDate, $startDate]); // Pass the parameters for status
        if ($car_type) {
            $query->where('categories.type', $car_type);
        }
    // Execute the query
    return $query->get();
    }
}
