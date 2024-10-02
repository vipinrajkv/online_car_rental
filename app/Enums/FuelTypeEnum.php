<?php

namespace App\Enums;

enum FuelTypeEnum:string {

    case PETROL = 'Petrol';
    case DIESEL = 'Diesel';
    case CNG = 'Cng';
    case ELECTRIC = 'Electric';
}