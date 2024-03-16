<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medicine;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'date_of_birth',
        'medical_conditions',
    ];

    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
