<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\categori;
use App\Models\MeterReading;
use App\Models\User;
use Illuminate\Http\Request;

class pelanggan extends Controller
{
    public function list()
    {
        $users = User::with('meterReadings')->get();
        return view('admin.pelanggan.list', compact('users'));
    }

    public function detail($id)
    {
        $pelanggan = User::find($id);
        $meterReadings = $pelanggan->meterReadings; // Asumsi relasi sudah didefinisikan di model User

        return view('admin.pelanggan.detail', compact('pelanggan', 'meterReadings'));
    }

    public function edit($id)
    {
        $meterReading = MeterReading::findOrFail($id);
        $categories = categori::all();

        return view('admin.pelanggan.edit', compact('meterReading', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $meterReading = MeterReading::findOrFail($id);
        $meterReading->update($request->all());

        return redirect()->route('admin.pelanggan.detail', $meterReading->user_id)
            ->with('success', 'Meter reading updated successfully');
    }

    public function destroy($id)
    {
        $meterReading = MeterReading::findOrFail($id);
        $meterReading->delete();

        return redirect()->route('admin.pelanggan.detail', $meterReading->user_id)
            ->with('success', 'Meter reading deleted successfully');
    }

    public function add($user_id)
    {
        $user = User::findOrFail($user_id);
        $categories = categori::all();
        return view('admin.pelanggan.add', compact('user', 'categories'));
    }

    public function addaction(Request $request)
    {
        $validated = $request->validate([
            'number_parameter' => 'required|numeric|digits:10',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'reading_date' => 'required|date',
        ]);

        MeterReading::create($validated);

        return redirect()->route('admin.pelanggan.detail', ['id' => $request->user_id])->with('success', 'Meter reading added successfully');
    }
}
