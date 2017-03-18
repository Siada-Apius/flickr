<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flickr extends Model
{
    private $api_key = 'ed4aaa08e7e03a3168f5143248f665b9';

    private static function curl($url)
    {
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

    public static function getRecent()
    {
        $url = 'https://api.flickr.com/services/rest/?'
            . 'method=flickr.photos.getRecent'
            . '&api_key=ed4aaa08e7e03a3168f5143248f665b9'
            . '&format=json'
            . '&nojsoncallback=1'
        ;

        return json_decode(static::curl($url));
    }

    public static function getPhotoSizes($id)
    {
        $url = 'https://api.flickr.com/services/rest/?'
            . 'method=flickr.photos.getSizes'
            . '&api_key=ed4aaa08e7e03a3168f5143248f665b9'
            . '&photo_id=' . $id
            . '&format=json'
            . '&nojsoncallback=1'
        ;

        return json_decode(static::curl($url));
    }

    public static function getPhotoInfo($id, $farm)
    {

    }
}
