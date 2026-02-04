<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarSkill extends Model
{
    protected $fillable = [
        'label',
        'percent',
        'sort_order',
    ];
}
