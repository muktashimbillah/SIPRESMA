<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeterReading extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'category_id',  'reading_date',
    ];

    protected $dates = ['reading_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
