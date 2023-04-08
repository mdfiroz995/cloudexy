<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = ['message','name','designation','testimg'];
    protected $table = "testimonial";
    protected $primaryKey = "id";

}
