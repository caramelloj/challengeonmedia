<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DatatableController extends Controller
{
    public function onevsone(){
        $response = Http::get('https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=3&start=1&count=100');
 
        $resp = $response->json();
        
        $players1v1 = $resp['leaderboard'];

        return datatables()->of($players1v1)->toJson();
    }

    public function elotg(){
        $response1 = Http::get('https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=2&start=1&count=100');

        $resp1 = $response1->json();

        $tg = $resp1['leaderboard'];

        return datatables()->of($tg)->toJson();

    }
}
