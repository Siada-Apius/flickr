<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flickr extends Model
{
    /**
     * Make remote requests
     *
     * @param $url
     * @return mixed
     */
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

        return json_decode($output);
    }

    /**
     * Get recent photos
     *
     * @return mixed
     */
    public static function getRecent()
    {
        $url = 'https://api.flickr.com/services/rest/?'
            . 'method=flickr.photos.getRecent'
            . '&api_key=' . config('flickr.key')
            . '&format=json'
            . '&nojsoncallback=1'
        ;

        return static::curl($url);
    }

    /**
     * Get photo sizes
     *
     * @param $id
     * @return mixed
     */
    public static function getPhotoSizes($id)
    {
        $url = 'https://api.flickr.com/services/rest/?'
            . 'method=flickr.photos.getSizes'
            . '&api_key=' . config('flickr.key')
            . '&photo_id=' . $id
            . '&format=json'
            . '&nojsoncallback=1'
        ;

        return static::curl($url);
    }

    /**
     * Get photo info
     *
     * @param $id
     * @return mixed
     */
    public static function getPhotoInfo($id)
    {
        $url = 'https://api.flickr.com/services/rest/?'
            . 'method=flickr.photos.getInfo'
            . '&api_key=' . config('flickr.key')
            . '&photo_id=' . $id
            . '&format=json'
            . '&nojsoncallback=1'
        ;

        return static::curl($url);
    }
}
