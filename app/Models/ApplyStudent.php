<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ApplyStudent extends Model
{
    use HasFactory;

    public function paymentInfos()
    {
        return $this->hasMany(PaymentInfo::class);
    }


      public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}