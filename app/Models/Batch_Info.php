<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch_Info extends Model
{
    use HasFactory;
    protected $fillable = ['batch_name','batch_detail','from_batch','to_batch','status'];
    protected $table = "batch_info";
    protected $primaryKey = "id";
}
