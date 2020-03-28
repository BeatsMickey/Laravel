<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use App\model\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
//    function index(Request $request, FileSystemWork $fileSystemWork) {
//        if($request->isMethod('post')) {
//            $fileSystemWork->writeFile($request->only(['name','feedback']));
//            return redirect()->route('feedback');
//        }
//        return view('feedback/feedbackForm');
//    }
    function index(Request $request) {
        if($request->isMethod('post')) {
           // dd($request->only(['name', 'review', 'email']));
            $feedback = new Feedback();
            $feedback->fill($request->only(['name', 'review', 'email']));
            $feedback->save();
            return redirect()->route('feedback');
        }
        return view('feedback/feedbackForm');
    }
}
