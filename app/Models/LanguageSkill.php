<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageSkill extends Model
{
    protected $fillable = [
        'label',
        'percent',
        'sort_order',
    ];
}
