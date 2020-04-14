<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RssLinks extends Model
{
    protected $fillable = [
        'link',
        'categories_id',
        'is_active',
    ];

    public static function getAllActiveLinks() {
        return RssLinks::query()->where('is_active', 1)->pluck('link', 'categories_id');
    }

    public static function getAllLinks(int $numberPerPage) {
        return RssLinks::query()->paginate($numberPerPage);
    }
}
