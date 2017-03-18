<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flickr extends Model
{
    public static function getRecent()
    {
        $url = "https://api.flickr.com/services/rest/?"
        . "method=flickr.photos.getRecent"
        . "&api_key=c64fda5a2ce5999966df03f0c5123f7b"
        . "&format=json"
        . "&nojsoncallback=1"
        . "&auth_token=72157681449296846-17ef98465d39cef4"
        . "&api_sig=108768be60825495f90457ec3ffc29c6"
        ;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, "http://www.example.org/yay.htm");
        curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }

    public static function getPhotoSizes($id)
    {
    }
}
