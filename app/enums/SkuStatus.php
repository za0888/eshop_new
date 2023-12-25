<?php

namespace App\enums;
//!!!!!!!!!!!!!!!!!
//Bad choice. This status is inappropriate because Sku model has attribute 'quantity_in_stock' so mess.
enum SkuStatus: string
{
    case StockProcessing='stock processing';
    case Ready = 'ready';//ready to be sold
    case Ordered = 'ordered';
    case Sold='sold';// after been sold
    case Faulty='faulty'; //неисправен keeps in scrap stock
}
