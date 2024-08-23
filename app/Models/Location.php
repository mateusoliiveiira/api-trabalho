<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'location';

    // Define quais campos podem ser preenchidos em massa
    protected $fillable = [
        'street',
        'neighborhood',
        'number',
        'zip_code',
        'city',
        'state',
        'country',
    ];
}
