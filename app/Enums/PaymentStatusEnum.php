<?php

namespace App\Enums;

enum PaymentStatusEnum:string {

    case SUCCESS = 'Success';
    case FAILED = 'Failed';
    case PROCESSING = 'Processing';
}