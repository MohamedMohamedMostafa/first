<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('showString3');
    }
   public function showString0()
   {
       return 'the first controller0';
   } public function showString1()
   {
       return 'the first controller1';
   } public function showString2()
   {
       return 'the first controller2';
   } public function showString3()
   {
       return 'the first controller3';
   } public function showString4()
   {
       return 'the first controller4';
   }
}
