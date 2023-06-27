<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class DOController extends Controller
{
    public function index()
    {
        $dos = DB::table('sensordata')
            ->orderByDesc('reading_time')
            ->paginate(10);
        return view('pages.do', compact('dos'));
    }
}
