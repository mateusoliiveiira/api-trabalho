<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    protected $fillable = [
        'name', 'age', 'height', 'weight', 'sex', 'cpf', 'rg', 'team'
    ];
}
