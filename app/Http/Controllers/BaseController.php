<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BaseController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function action() {
        return view('action');
    }

    public function doctores() {
        return view('doctores');
    }

    public function news() {
        return view('news');
    }

    public function covid19(Request $request)
    {


        $response = Http::withHeaders([
            'X-RapidAPI-Key'=> '5b4251984amsh0fbcfd02a1103e1p1d2795jsnaacaa5a32f18',
            'X-RapidAPI-Host' => 'covid-19-coronavirus-statistics.p.rapidapi.com'

        ])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/total',[
            "country" => "Indonesia"
        ]);

        $listdata = $response['data'];
      
        // return $listdata;
        return view('covid',compact('listdata'));
    }
}