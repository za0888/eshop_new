<?php

namespace App\enums;

enum OrderStatus: string
{
    case Paid = 'paid';// mark as deleted  from stock main

    case Pending = 'pending';//stock main, not assigned to the menager

    case Processing = 'processing';//came to manager

    case Shipped = 'shipped';// ,mail operator , send noitification to customer

    case Canceled = 'canceled';//customer refused to pay for the product
    case Archiv = 'archiv';//order is closed skus moved to the stock of 'archived'
}
