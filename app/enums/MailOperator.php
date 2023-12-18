<?php

namespace App\enums;

enum MailOperator: string
{
    case NovaPost = 'Nova Post';
    case UkrPost = 'UkrPost';
    case Dhl ='dhl';
}
