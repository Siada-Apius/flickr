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
        $flickr = Flickr::getRecent();

       return view('index.index', compact('flickr'));
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function photo($id)
    {
        $info = Flickr::getPhotoInfo($id);
        $photo = Flickr::getPhotoSizes($id);

        return view('index.photo', compact('info', 'photo'));
    }
}
