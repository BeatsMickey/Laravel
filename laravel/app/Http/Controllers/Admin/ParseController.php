<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Jobs\NewsParsing;
use App\Model\RssLinks;


class ParseController extends Controller
{
    public function index() {
        //dd((new \DateTime("12 Apr 2020 06:02:31 +0000"))->format('Y-m-d H:i:s'));
        $rssLinks = RssLinks::getAllActiveLinks();
        foreach ($rssLinks as $category=>$link) {
            NewsParsing::dispatch($link, $category);
        }
    }
}
