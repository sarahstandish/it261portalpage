<?php

function get_lat_and_lng($google_api_key, $location) {

    $location = urlencode($_POST['location']);

    $maps_url = "https://maps.googleapis.com/maps/api/geocode/json?address=$location&key=$google_api_key";

    $maps_json = file_get_contents($maps_url);

    $maps_array = json_decode($maps_json, true);

    $latitude = $maps_array['results'][0]['geometry']['location']['lat'];
    $longitude = $maps_array['results'][0]['geometry']['location']['lng'];

    return [$latitude, $longitude];

}

function get_photo_array($flickr_api_key, $search_term, $latitude, $longitude, $licenses) {
    $flickr_url = "https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=$flickr_api_key&text=$search_term&content_type=1&per_page=500&format=json&nojsoncallback=1&sort=relevance&radius=32&lat=$latitude&lon=$longitude&license=$licenses";

    $flickr_json = file_get_contents($flickr_url);

    $flickr_array = json_decode($flickr_json, true);
    $photo_array = $flickr_array['photos']['photo'];
    return $photo_array;
}

function display_photos($photo_array, $flickr_api_key) {

    $top_10_photos = [];

    if (!empty($photo_array)) {
        foreach($photo_array as $photo) {
            $server_id = $photo['server'];
            $photo_id = $photo['id'];
            $photo_secret = $photo['secret'];
            $photo_owner = $photo['owner'];
                        
                if (checkDPI($_POST['dpi'], $photo_id, $photo_secret, $flickr_api_key)) {
                    $top_10_photos["https://www.flickr.com/photos/$photo_owner/$photo_id"] = "https://live.staticflickr.com/$server_id/" . $photo_id . "_" . "$photo_secret" . "_n.jpg";
                }
                if (count($top_10_photos) >= 10) {
                    break;
                }
            }
    }

    return $top_10_photos;
}

function checkDPI($dpi, $photo_id, $photo_secret, $flickr_api_key) {

    set_time_limit(0);

    $photo_url = "https://www.flickr.com/services/rest/?method=flickr.photos.getExif&api_key=$flickr_api_key&photo_id=$photo_id&secret=$photo_secret&format=json&nojsoncallback=1";
    
    $photo_json = file_get_contents($photo_url);

    $one_photo_array = json_decode($photo_json, true);

    if (in_array('photo', array_keys($one_photo_array))) {
        foreach ($one_photo_array['photo']['exif'] as $item) {
        
            if (in_array('X-Resolution', $item, true)) {
                // return true if photo dpi is greater than or equal to desired dpi
                return ($item['raw']['_content'] >= $dpi);
            }
        }
    } else {
        return false;
    }


}


function defaultChecked($n) {
    if (!empty($_POST['licenses']) && in_array($n, $_POST['licenses'])) {
        return "checked='checked'";
    } else if (!empty($_POST['licenses']) && !in_array($n, $_POST['licenses'])) {
        return "";
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST['licenses'])) {
        return "";
    } else {
        return "checked='checked'";
    }
}

function defaultUnchecked($n) {
    if (isset($_POST['licenses']) && in_array($n, $_POST['licenses'])) {
        return "checked='checked'";
    } else if (isset($_POST['licenses']) && !in_array($n, $_POST['licenses'])) {
        return "";
    } else {
        return "";
    }
}


?>