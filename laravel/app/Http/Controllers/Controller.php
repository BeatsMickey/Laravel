<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $categories = [
        [
            'id' => 1,
            'name' => 'Sport',
        ],
        [
            'id' => 2,
            'name' => 'Cinema',
        ],
        [
            'id' => 3,
            'name' => 'Games',
        ],
        [
            'id' => 4,
            'name' => 'Music',
        ],
        [
            'id' => 5,
            'name' => 'COVID-19',
        ],
    ];

    protected $news = [
        [
            'id' => 1,
            'id_category' => 1,
            'title' => 'sport news 1',
        ],
        [
            'id' => 2,
            'id_category' => 1,
            'title' => 'sport news 2',
        ],
        [
            'id' => 3,
            'id_category' => 1,
            'title' => 'sport news 3',
        ],
        [
            'id' => 4,
            'id_category' => 1,
            'title' => 'sport news 4',
        ],
        [
            'id' => 5,
            'id_category' => 2,
            'title' => 'cinema news 1',
        ],
        [
            'id' => 6,
            'id_category' => 2,
            'title' => 'cinema news 2',
        ],
        [
            'id' => 7,
            'id_category' => 2,
            'title' => 'cinema news 3',
        ],
        [
            'id' => 8,
            'id_category' => 2,
            'title' => 'cinema news 4',
        ],
        [
            'id' => 9,
            'id_category' => 3,
            'title' => 'game news 1',
        ],
        [
            'id' => 10,
            'id_category' => 3,
            'title' => 'game news 2',
        ],
        [
            'id' => 11,
            'id_category' => 3,
            'title' => 'game news 3',
        ],
        [
            'id' => 12,
            'id_category' => 3,
            'title' => 'game news 4',
        ],
        [
            'id' => 13,
            'id_category' => 4,
            'title' => 'music news 1',
        ],
        [
            'id' => 14,
            'id_category' => 4,
            'title' => 'music news 2',
        ],
        [
            'id' => 15,
            'id_category' => 4,
            'title' => 'music news 3',
        ],
        [
            'id' => 16,
            'id_category' => 4,
            'title' => 'music news 4',
        ],
        [
            'id' => 17,
            'id_category' => 5,
            'title' => 'COVID-19 news 1',
        ],
        [
            'id' => 18,
            'id_category' => 5,
            'title' => 'COVID-19 news 2',
        ],
        [
            'id' => 19,
            'id_category' => 5,
            'title' => 'COVID-19 news 3',
        ],
        [
            'id' => 20,
            'id_category' => 5,
            'title' => 'COVID-19 news 4',
        ],
    ];
}
