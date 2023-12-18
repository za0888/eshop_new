<?php

namespace App\enums;

enum ManagerState: string
{
    case Active = 'active';
    case Vocation = 'vocation';
    case IsIll = 'isill';
    case Fired ='fired';
}
