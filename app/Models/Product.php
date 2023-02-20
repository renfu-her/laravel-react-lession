<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends BaseModel
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = [];
}
