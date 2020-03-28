<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::query()->paginate(5);
        //dd($news);
        return view('admin.news.index', ['news' => $news]);
    }

    /**
     * @method GET | POST
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            /** @var News $model */
            $model = new News();
            $model->fill($request->all());
            $model->save();

            return redirect()->route("admin::news::create");
        }

        $content = view("admin.news.create", ['categories' => (new Categories())->getCategories()]);
        return response($content)
            ->header("test", 'kjskjfsjjkljklj');

    }

    public function update()
    {
        echo "admin update";
        exit;
    }

    public function delete($id)
    {
        News::destroy([$id]);
        return redirect()->route("admin::news::index");
    }


}
