<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    
    public function index(){
        $response = Http::get('https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=3&start=1&count=100');
        
        $response1 = $response->json();

        $res = $response1['leaderboard'];

        
        return view('layouts.admin', compact('res'));
    }

    public function aplicarFiltros (Request $request){
        $res = '';

        if ($request->tipo == '1'){
            $response1 = Http::get('https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=3&start=1&count=100'); // edit ""

            $resp1 = $response1->json();

            $res = $resp1['leaderboard'];
        }
        elseif($request->tipo == '2'){
            $response1 = Http::get('https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=4&start=1&count=100');

            $resp1 = $response1->json();
    
            $res = $resp1['leaderboard'];
        }

        return view('layouts.admin', compact('res'));
    }

}
