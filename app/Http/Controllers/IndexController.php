<?php

namespace App\Http\Controllers;

use App\Flickr;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Show the application index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flickr = json_decode(Flickr::getRecent());

        // http://farm{farm_id}.staticflickr.com/{server_id}/{id}_{secret}{size}.jpg

       return view('index.index', compact('flickr'));
    }

    public function photo($id)
    {
        $photo = Flickr::getPhotoSizes($id);

        return view('index.photo', compact('photo'));
    }
}
