<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\MeterReading;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bills extends Controller
{
    public function bills()
    {
        $user = Auth::user();
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        // Tagihan bulan ini
        $currentMonthBills = Bill::with('meterReading')
            ->where('user_id', $user->id)
            ->whereYear('due_date', $currentYear)
            ->whereMonth('due_date', $currentMonth)
            ->get();

        // Tagihan yang belum dibayar dari bulan sebelumnya
        $unpaidPreviousBills = Bill::with('meterReading')
            ->where('user_id', $user->id)
            ->where('paid_status', 0)
            ->where(function ($query) use ($currentYear, $currentMonth) {
                $query->whereYear('due_date', '<', $currentYear)
                    ->orWhere(function ($query) use ($currentYear, $currentMonth) {
                        $query->whereYear('due_date', $currentYear)
                            ->whereMonth('due_date', '<', $currentMonth);
                    });
            })
            ->get();

        // Gabungkan hasilnya
        $bills = $currentMonthBills->merge($unpaidPreviousBills);

        return view('user.tagihan.tagihan', compact('bills'));
    }

    public function payBill($id)
    {
        $bill = Bill::findOrFail($id);

        if ($bill->user_id == Auth::id() && !$bill->paid_status) {
            $bill->paid_status = 1;
            $bill->paid_at = now();
            $bill->save();

            return redirect()->route('customer.bills')->with('success', 'Bill paid successfully.');
        }

        return redirect()->route('customer.bills')->with('error', 'Unable to pay the bill.');
    }

    public function billHistory($meterId)
    {
        $user = Auth::user();
        $meter = MeterReading::where('user_id', $user->id)->findOrFail($meterId);
        $bills = Bill::where('meter_reading_id', $meter->id)->get();

        return view('user.tagihan.histori', compact('meter', 'bills'));
    }
}
