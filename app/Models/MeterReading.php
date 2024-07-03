<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeterReading extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_parameter', 'user_id', 'category_id',  'reading_date',
    ];

    protected $dates = ['reading_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(categori::class);
    }


    public function hasBillThisMonth()
    {
        return $this->bills()
            ->whereYear('due_date', now()->year)
            ->whereMonth('due_date', now()->month)
            ->exists();
    }

    public function bills()
    {
        return $this->hasMany(Bill::class, 'user_id', 'user_id'); // sesuaikan dengan kunci asing yang sesuai
    }
}
