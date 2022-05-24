<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\TablesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Http;


class TablesExpController extends Controller
{
    public function export(){



       
        return Excel::download(new TablesExport, 'players.xlsx');
    }

    
}
