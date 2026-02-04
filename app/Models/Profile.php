<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'title_primary',
        'title_secondary',
        'summary',
        'residence',
        'city',
        'age',
    ];
}
