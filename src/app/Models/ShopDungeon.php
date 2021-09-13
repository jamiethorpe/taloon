<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ShopDungeon extends Pivot
{
    use HasFactory;

    protected $table = 'shop_dungeons';

    protected $fillable = ['dungeon_id', 'shop_id', 'is_cleared'];
}
