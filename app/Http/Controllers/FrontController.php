<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;

class FrontController extends Controller
{
  
  public function __construct(){
    Carbon::setLocale('es');
  }

    public function index()
    {
        $articles = Article::orderby('id', 'DESC')->paginate(6);
        $articles->each(function($articles){
          $articles->category;
          $articles->image;
        });
        return view('front.index')
          ->with('articles', $articles);
    }

}
