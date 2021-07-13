<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PastChampions;

class PastChampionsController extends Controller
{
    public function listPastChampion(){
        return view('pages.past-champions',[
            'pastChampions' => PastChampions::all(),
        ]);
    }
}
