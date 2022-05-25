<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Exports\TablesExport;
use Maatwebsite\Excel\Facades\Excel;


class DatatableController extends Controller
{
    public function exportxls(){
        return Excel::download(new TablesExport, 'listadojugadores.xlsx');
    }
}
