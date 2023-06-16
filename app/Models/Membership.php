<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'honorific',
        'first_name',
        'last_name',
        'email',
        'country',
        'city',
        'mobile',
        'referral_source',
        'company',
        'designation',
    ];
}
