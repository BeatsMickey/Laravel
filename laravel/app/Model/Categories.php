<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public static function getActiveCategories() {
        return Categories::all()->where('is_active', '1');
    }
}
