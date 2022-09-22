<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'id_category',
        'image',
        'description',
        'model',
        'wheels',
        'power',
        'engine',
        'transmission',
        'tires',
        'tank'
    ];
}
 