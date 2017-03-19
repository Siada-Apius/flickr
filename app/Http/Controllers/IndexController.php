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
        return view('index.index');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function photo($id)
    {
//        $info = Flickr::getPhotoInfo($id);
//        $photo = Flickr::getPhotoSizes($id);

        return view('index.photo', compact('id'));
    }


    public function recent()
    {
        $flickr = Flickr::getRecent();

        return response()->json(compact('flickr'));
    }


    public function photoInfo($id)
    {
        $info = Flickr::getPhotoInfo($id);
        $photo = Flickr::getPhotoSizes($id);

        return response()->json(compact('info', 'photo'));
    }
}
