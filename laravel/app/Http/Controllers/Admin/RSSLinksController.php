<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RssLinksRequest;
use App\model\Categories;
use App\Model\RssLinks;
use Illuminate\Http\Request;

class RSSLinksController extends Controller
{
    public function index() {
        $links = RssLinks::getAllLinks(8);
        return view('admin.rss.rss_links', ['links' => $links]);
    }

    public function create() {
        return view('admin.rss.rss_create_update', ['rss' => (new RssLinks()), 'categories' => (Categories::all())]);
    }

    public function update(int $id) {
        $rss = RssLinks::find($id);
        return view('admin.rss.rss_create_update', ['rss' => $rss, 'categories' => Categories::find($rss->categories_id)]);
    }

    public function save(RssLinksRequest $request, $id) {
        if ($request->isMethod('post')) {
            if ($id) {
                $rss = RssLinks::find($id);
            } else {
                $rss = new RssLinks();
            }
            $rss->fill($request->all());
            $rss->save();
        }
        return redirect()->route("admin.rss.index");
    }

    public function delete($id)
    {
        $rss = RssLinks::find($id);
        $rss->is_active = !($rss->is_active);
        $rss->save();
        return redirect()->route("admin.rss.index");
    }
}
