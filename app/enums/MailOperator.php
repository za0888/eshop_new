<?php

namespace App\enums;

enum MailOperator: string
{
    case NovaPost = 'NOVA POST';
    case UkrPost = 'UKRPOST';
    case Dhl ='DHL';
}
