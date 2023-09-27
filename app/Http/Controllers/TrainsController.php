<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('data_partenza', '>=', "2023-09-27")
            ->orderBy('data_partenza')
            ->get();

        return view('trains', ['trains' => $trains]);
    }
}
