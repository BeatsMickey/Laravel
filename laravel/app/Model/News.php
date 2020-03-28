<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public static function getActiveNewsByCategoriesId($id) {
        return News::query()->where('categories_id', $id)->where('is_active', 1)->get();
    }
}
