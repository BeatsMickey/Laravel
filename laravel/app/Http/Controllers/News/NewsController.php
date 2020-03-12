<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index() {
        $html = 'News categories:<br>';
        foreach ($this->categories as $value) {
            $route = route('news.newsCategories', $value['id']);
            $html .= <<<php
                    <a href="$route">{$value['name']}</a><br>
php;

        };
        return $html;
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
        $html = "News categories {$categoriesName}:<br>";
        foreach ($news as $value) {
            $route = route('news.singleNews', $value['id']);
            $html .= <<<php
                    <a href="$route">{$value['title']}</a><br>
php;
        };
        return $html;
    }

    public function singleNews($id) {
        $html = '';
        foreach ($this->news as $value) {
          if ($value['id'] == $id) {
              $html = <<<php
                <h3>{$value['title']}</h3>
php;
          }
        };
        return $html;
    }
}
