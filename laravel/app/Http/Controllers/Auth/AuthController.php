<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index() {
        return <<<php
                <form method="post">
                <label>Ваш логин:
                    <input type="text" name="login" placeholder="login"></label><br>
                <label>Ваш пароль:
                    <input type="text" name="password" placeholder="password"></label><br>
                <label>Запомнить меня:
                    <input type="checkbox" name="check"></label><br>
                <input type="submit">       
php;
    }
}
