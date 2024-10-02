<?php

namespace App\Models;

use App\Enums\PaymentStatusEnum;
use App\Enums\PaymentTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'booking_id',
        'user_id',
        'location_detail_id',
        'payment_type',
        'payment_status',
        'amount',
    ];

    protected function Casts():array
    {
        return [
            'payment_type' => PaymentTypeEnum::class,
            'payment_status' => PaymentStatusEnum::class,
        ];
    }
}
