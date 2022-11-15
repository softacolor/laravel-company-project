<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about(){
     return view('page.about');
    }

    public function contact(){
        return view('page.contact');
       }

       public function seo(){
        return view('services.seo');
       }

       public function smm(){
        return view('services.smm');
       }

       public function email(){
        return view('services.email');
       }
       public function web(){
        return view('services.webdesign');
       }

       public function youtube(){
        return view('services.youtube');
       }

       public function leadgen(){
        return view('services.leadgen');
       }

       public function services(){
        return view('services.index');
       }

       public function blog(){
        return view('page.blog');
       }
}
