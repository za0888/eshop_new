<?php

namespace App\enums;

enum UserStatus: string

{
    case Administrator = 'administrator';
    case Manager = 'manager';
    case Customer = 'customer';
    case Accountant = "accountant";
    case Boss = "boss";
    case Stockkeeper = "stock keeper";
    case Secretary ='secretary';


    // extra helper to allow for greater customization of displayed values, without disclosing the name/value data directly
    public function label(): string
    {
        return match ($this) {
            static::Administrator => 'Administrator',
            static::Manager => 'Manager',
            static ::Accountant => "Accountant",
            static::Customer => 'Customer',
            static:: Boss => "Boss",
            static::Stockkeeper => "StockKeeper",
            static ::Secretary => "Secretary"
        };
    }
}

