<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photomedias = Gallery::where('type', 1)->get();
        $videomedias = Gallery::where('type', 2)->get();
        return view('gallery', compact('photomedias', 'videomedias'));
    }

}