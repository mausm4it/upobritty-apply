<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentInfo extends Model
{
    use HasFactory;
    public function apply_student()
    {
        return $this->belongsTo(ApplyStudent::class);
    }
}