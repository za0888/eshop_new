<?php

namespace App\enums;

enum DiscountState: string
{
    case Idle = 'idle';
    case Active = 'active';
    case Archiv = 'archiv';
}
