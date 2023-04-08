<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['c_name','c_detail','c_price','c_status','c_img','created_by'];
    protected $table = "courses";
    protected $primaryKey = "id";
}
