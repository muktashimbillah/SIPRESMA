<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\MeterReading;
use Illuminate\Http\Request;

class tagihan extends Controller
{
    public function list($id)
    {
        $meteran = MeterReading::findOrFail($id);
        $tagihan = Bill::where('meter_reading_id', $id)->get();

        return view('admin.tagihan.list', compact('meteran', 'tagihan'));
    }
}
