<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function index()
    {
        $gallery = Gallery::all();
        return view('home', compact('gallery'));
    }
}
