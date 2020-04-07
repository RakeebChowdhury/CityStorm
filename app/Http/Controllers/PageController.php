<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class PageController extends Controller
{
    public function index(){
      $user = Auth::user();
      return view('pages/home', compact('user'));
    }

    public function results(Request $request){

      $search = $request->search;
      return redirect('search/'.$search);
      }

      public function search(Request $request, $keyword){

        // return $request->search;
        // https://api.unsplash.com/photos/?client_id=HDrbePOJ5-23KP-EKrkSJ1sl5QNY58qzw9jyeiu6Ry0
        // 'https://api.unsplash.com/search/photos?query=london&client_id=HDrbePOJ5-23KP-EKrkSJ1sl5QNY58qzw9jyeiu6Ry0'

        //Get search term
        // $search = $request->search;
        $search = $keyword;
        
        //Use API key to get correct data
        $client = new Client();
        $res = $client->request('GET', "https://api.unsplash.com/search/photos?query=".urlencode($search)."&per_page=30&client_id=".env("UNSPLASH_KEY")."", ['verify' => '/MAMP/conf/php7.2.14/cacert.pem']);
        $data = $res->getBody();
        $data = json_decode($data);
        $filteredData = [];
        // return $data->results;

        //Filter data to get photos tagges with "city"
        foreach($data->results as $result){
          $tags = $result->tags;
          // return $tags;
          foreach($tags as $tag){
            $title = $tag->title;
            // return $title;
            $arr = explode(" ",$title);
            if(in_array("city", $arr)){
              array_push($filteredData, $result);
            }
          }
        }

      // return count($filteredData);
          // return $filteredData;

        $user = Auth::user();
        return view('pages/results', compact('user', 'filteredData', 'search'));
      }
    }
