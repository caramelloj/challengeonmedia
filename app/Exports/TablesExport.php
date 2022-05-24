<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Http;


class TablesExport implements FromCollection, WithHeadings
{
    protected $data;

/*     public function __construct($data)
    {
        $this->data = $data;
    }
   */
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function collection()
    {
        $response = Http::get('https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=3&start=1&count=100');
        
        $response1 = $response->json();

        $players = $response1['leaderboard'];
        
        /* $players = $response1[0]['leaderboard']; 
         */
       /*  $players = collect([$players])->select('id','name', 'rating'); */

        return collect($players);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings() :array
    {
        return [
            'profile_id',
            'rank',
            'steam_id',
            'icon',
            'name',
            'clan',
            'country',
            'previous_rating',
            'highest_rating',
            'streak',
            'lowest_streak',
            'highest_streak',
            'games',
            'wins',
            'losses',
            'drops',
            'last_match',
            'last_match_time'


        ];
    }
}