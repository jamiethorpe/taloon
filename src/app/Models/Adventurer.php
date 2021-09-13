<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventurer extends Model
{
    use HasFactory;

    protected $fillable = ['shop_id', 'adventurer_type_id', 'name', 'level', 'health', 'is_alive'];
}
