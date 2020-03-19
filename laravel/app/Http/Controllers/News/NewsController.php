<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index() {
        return view('news/categories', ['categories' => $this->categories]);
    }

    public function newsCategories($id) {
        $news = [];
        foreach ($this->news as $value) {
            if ($value['id_category'] == $id) {
                $news[] = $value;
            }
        };
        $categoriesName = '';
        foreach ($this->categories as $value) {
            if ($value['id'] = $id) {
                $categoriesName = $value['name'];
                break;
            }
        };
        return view('news/categoriesNews', ['news' => $news, 'categoriesName' => $categoriesName]);
    }

    public function singleNews($id) {
        foreach ($this->news as $value) {
          if ($value['id'] == $id) {
              return view('news/singleNews', ['news' => $value]);
          }
        };
    }
}
