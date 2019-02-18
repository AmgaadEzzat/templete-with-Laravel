<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
     public function contact(){
          return view('contact');
      }

     public function aboutus(){
          return view('aboutus');
      }

      public function CV(){
         $cities=array('minia','cairo','assuit','egeypt');
         $i=0;
         return view('varfromC',compact('cities','i'));
      }
}
