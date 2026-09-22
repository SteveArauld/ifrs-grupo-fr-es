<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationSubmission extends Model
{
    protected $fillable = [
        'locale',
        'civility',
        'name',
        'first_name',
        'email',
        'phone',
        'country',
        'postal_code',
        'city',
        'loan_amount',
        'loan_duration',
    ];
}
