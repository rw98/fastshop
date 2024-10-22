<?php

namespace App\Structure\Address\Enum;

enum AddressScope: int
{
    case COMPANY = 0;
    case INVOICE = 1;
    case SHIPPING = 2;
}
