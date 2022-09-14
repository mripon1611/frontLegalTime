<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    public function index()
    {
        $response = Http::get('http://ronyapi.boighor.com/v1/homeMasterData');
        $data['magazineContent'] = $response['data']['magazineContent'];
        $data['postContents'] = $response['data']['postContent']['featureContent']['data'];
        $lawNewsContent = $response['data']['postContent']['lawNewsContent']['data'];
        $corporateContent = $response['data']['postContent']['corporateContent']['data'];
        $internationalContent = $response['data']['postContent']['internationalContent']['data'];
        $data['lawContents'] = [];
        $data['lawNewsContent'] = $lawNewsContent;
        $data['corporateContents'] = [];
        $data['internationalContent'] = [];
        foreach (array_chunk($lawNewsContent, 2) as $law) {
            array_push($data['lawContents'], $law);
        }

        foreach (array_chunk($corporateContent, 2) as $corporate) {
            array_push($data['corporateContents'], $corporate);
        }
        foreach (array_chunk($internationalContent, 5) as $international) {
            array_push($data['internationalContent'], $international);
        }

        // dd($data);
        return view('welcome', $data);
    }

    public function details($id)
    {
        $response1 = Http::get('http://ronyapi.boighor.com/v1/homeMasterData');
        $response = Http::get('http://ronyapi.boighor.com/v1/articledesc/' . $id);
        $data['details'] = $response['data']['articleData'];
        $data['lawNewsContent'] = $response1['data']['postContent']['lawNewsContent']['data'];;
        return view('details', $data);
    }
}
