<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\StudentLama;


class Ikans 
{
    private static $ikans = [
        [
            "id" => 1,
            "nama_ikan" => Cupang,
            "tanggal_menetas"=> 2007-09-04,
            "jenis_ikan" => "Jantan",
            "harga_ikan" => 5000,
        ],
        [
            "id" => 2,
            "nama_ikan" => Arwana,
            "tanggal_menetas"=> 2007-09-04,
            "jenis_ikan" => "Jantan",
            "harga_ikan" => 5000,
        ],
        [ 
            "id" => 3,
            "nama_ikan" => Arapaima,
            "tanggal_menetas"=> 2007-09-04,
            "jenis_ikan" => "Betina",
            "harga_ikan" => 115000,
        ],
        [
           "id" => 1,
            "nama_ikan" => Oscar,
            "tanggal_menetas"=> 2007-09-04,
            "jenis_ikan" => "Jantan",
            "harga_ikan" => 150000,
        ],
        [
             "id" => 1,
            "nama_ikan" => Aligator,
            "tanggal_menetas"=> 2007-09-04,
            "jenis_ikan" => "Jantan",
            "harga_ikan" => 14000,
        ],
    ];
    public static function all()
        {
            return self::$ikans;
        }
}

