<?php

namespace App\Models;

use App\Enums\BookingStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
        use HasFactory;

        /**
         * fillable
         *
         * @var array
         */
        protected $fillable = [
            'car_id',
            'booking_from',
            'booking_to',
            'user_id',
            'booking_status',
        ];

    protected function Casts():array
    {
        return ['booking_status' => BookingStatusEnum::class];
    }
}
