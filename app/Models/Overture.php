<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overture extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price_from', 'price_to', 'category_id'];
}
