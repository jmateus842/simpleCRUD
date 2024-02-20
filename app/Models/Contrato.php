<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    // Add 'ciudad' to the fillable array
    protected $fillable = [
        'pago',
        'categoria',
        'ciudad'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
