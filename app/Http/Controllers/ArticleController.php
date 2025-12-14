<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
   
    public function index()
{
 return view('articles.index');
}
    public function index1()
    {
         $data=[ [ "id" => 1, "title" => "First Article" ],
 [ "id" => 2, "title" => "Second Article" ]];
 return view('articles.index1',['articles'=>$data]);}
}
