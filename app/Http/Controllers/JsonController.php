<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{

    public function getJSON(Request $request)
{

    $url = 'https://teranga-mobile.pasteur.sn/api/v1/test/ve-sari';

    $response = file_get_contents($url);
    $newsData = json_decode($response);
    //$dataJson = \json_encode($newsData);

    return view('welcome',compact('newsData'));

}
}
