<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('id', 'ASC')->paginate(6);
        $images->each(function($images){
          $images->article;
        });
        return view('admin.image.index')->with('images', $images);
    }

}
