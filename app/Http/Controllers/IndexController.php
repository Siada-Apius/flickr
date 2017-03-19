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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function photo()
    {
        return view('index.photo');
    }


    /**
     * Get recent photos
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function recent()
    {
        $flickr = Flickr::getRecent();

        return response()->json(compact('flickr'));
    }


    /**
     * Get photo size and info
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function photoInfo($id)
    {
        $info = Flickr::getPhotoInfo($id);
        $photo = Flickr::getPhotoSizes($id);

        return response()->json(compact('info', 'photo'));
    }
}
