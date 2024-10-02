<?php

namespace App\Enums;

enum BookingStatusEnum:string {
    case PROCESSING = 'Processing';
    case VERIFIED = 'Verified';
    case REJECTED = 'Rejected';
    case CONFIRMED = 'Confirmed';
}