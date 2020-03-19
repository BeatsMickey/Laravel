<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return 'main admin page';
    }

    public function create() {
        return view('admin/adminCreate');
    }
}
