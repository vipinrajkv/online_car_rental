<?php

namespace App\Enums;

enum PaymentTypeEnum:string {

    case COD = 'Cod';
    case ONLINE_PAYMENT = 'Online Payment';
    case CREDIT = 'Credit';
}