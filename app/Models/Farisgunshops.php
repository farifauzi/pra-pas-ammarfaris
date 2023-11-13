<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Farisgunshop;

class Farisgunshops  
{
    private static $farisgunshops = [
        [
            "id" => 1,
            "serial_number" => 23425756,
            "model" => "AK47",
            "date_of_manufacture" => "2007-09-04",
            "accessories" => 'Penutup Laras atau Muzzle Brake', 
            "purchase_address" => "Los Angeles, California, Amerika",
        ],
        [
            "id" => 2,
            "serial_number" => 98765432,
            "model" => "M16",
            "date_of_manufacture" => "2008-05-12",
            "accessories" => 'Handguard Taktis',
            "purchase_address" => "Las Vegas, Nevada, Amerika",
        ],
        [
            "id" => 3,
            "serial_number" => 56783456,
            "model" => "Glock17",
            "date_of_manufacture" => "2010-02-18",
            "accessories" => 'Laser',
            "purchase_address" => "New York City, New York, Amerika",
        ],
        [
            "id" => 4,
            "serial_number" => 32345678,
            "model" => "Remington870",
            "date_of_manufacture" => "2009-11-30",
            "accessories" => 'Bipod',
            "purchase_address" => "Austin, Texas, Amerika",
        ],
        [
            "id" => 5,
            "serial_number" => 12423467,
            "model" => "BarrettM82",
            "date_of_manufacture" => "2012-08-22",
            "accessories" => 'Pelatuk Pemicu Jarak Jauh',
            "purchase_address" => "Phoenix, Arizona, Amerika",
        ],
    ];

    public static function all()
    {
        return self::$farisgunshops;
    }
}
