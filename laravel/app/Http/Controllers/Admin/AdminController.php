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
        return <<<php
        <form method="post">
        <label>Название новости:
            <input type="text" name="title"></label><br>
        <textarea name="description" cols="80" rows="10" placeholder="Описание новости"></textarea><br>
        <textarea name="miniDescription" cols="80" rows="10" placeholder="Краткое описание"></textarea><br>
        <input type="submit"> 
php;
    }
}
