<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;
use Illuminate\Support\Facades\DB;

class SuhuController extends Controller
{
    public function index()
    {
        $suhus = DB::table('sensordata')
            ->orderByDesc('reading_time')
            ->paginate(10);
        return view('pages.suhu', compact('suhus'));
    }
}
