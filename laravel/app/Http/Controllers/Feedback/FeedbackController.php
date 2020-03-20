<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\FileSystemWork;

class FeedbackController extends Controller
{
    function index(Request $request, FileSystemWork $fileSystemWork) {
        if($request->isMethod('post')) {
            $fileSystemWork->writeFile($request->only(['name','feedback']));
            return redirect()->route('feedback');
        }
        return view('feedback/feedbackForm');
    }
}
