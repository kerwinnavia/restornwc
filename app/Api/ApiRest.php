<?php


namespace App\Api;

use Illuminate\Support\Facades\Http;

class ApiRest
{

    static function get($url){
        return Http::get(env('API_REST_NWC')."/".$url)->json();
    }
    static function getData($url,$id){
        return Http::get(env('API_REST_NWC')."/".$url.'?id='.$id)->json();
    }
    static function post($url,$json){
        return Http::post(env('API_REST_NWC')."/".$url,$json)->throw()->json();
    }
    static function put($url,$json){
        return Http::put(env('API_REST_NWC')."/".$url,$json)->throw()->json();
    }
    static function delete($url,$id){
        return Http::delete(env('API_REST_NWC')."/".$url,$id)->throw()->json();
    }
}
