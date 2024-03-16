<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'dosage_form',
        'strength',
        'expiry_date',
        'manufacturer',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
