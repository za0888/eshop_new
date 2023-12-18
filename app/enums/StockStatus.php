<?php

namespace App\enums;

enum StockStatus: string
{
    case Main = 'main';
    case Order = 'order';
    case Manager = 'manager';
}
