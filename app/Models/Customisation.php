<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'headerlogo',
        'footerlogo',
        'email',
        'phoneno',
        'address',
        'facebook',
        'linkedin',
        'instagram',
        'twitter',
        'youtube',
        'creative_score',
        'trackable_score',
        'guaranteed_score',
    ];

}
