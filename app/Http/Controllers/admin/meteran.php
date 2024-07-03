<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MeterReading;
use Illuminate\Http\Request;

class meteran extends Controller
{
    public function listMeters()
    {
        $meters = MeterReading::with('user', 'category')->get();
        return view('admin.meteran.list', compact('meters'));
    }
}
