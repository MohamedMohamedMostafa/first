<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showAdminName()
    {

        return 'Mohamed Mostafa';
    }

    public function showIndex()
    {

        $obj = new \stdClass;
        $obj->name = 'Mohamed';
        $obj->id = 1;
        $obj->age = 23;
        $data = ['mohamed', 'mostafa'];
        return view('welcome', compact('data', 'obj'));
    }
}
