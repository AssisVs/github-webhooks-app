<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Job;
use Illuminate\Support\Facades\DB as FacadesDB;

class ListaJobController extends Controller
{
    public function listajob(Request $request)
    {

       /**   Recuperar os registros do banco */
        $jobs = Job::get();

         return view('listajob', ['jobs' => $jobs]);
    }
}
