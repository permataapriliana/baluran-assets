<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {
        // Data dummy sementara
        $visitorData = [15, 20, 35, 40, 28, 50, 60];
        $fireData = [0, 1, 0, 2, 0, 1, 0];

        return view('dashboard', compact('visitorData', 'fireData'));
    }
}
