<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    public $timestamps = false; // vypnutie pouzivanie timestamps stlpcov v DB

    protected $table = 'test'; // zadefinovanie vlastneho nazvu tabulky kedze laravel automaticky generuje nazvy v mnoznom case

    protected $fillable = [
        'test' // polia ktore sa budu naplnat
    ];
}
