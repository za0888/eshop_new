<?php

namespace App\enums;

enum StockName : string
{
    case Main='main';
    case Order='order';
    case Faulty='faulty';
    case Archiv='archiv';

}
