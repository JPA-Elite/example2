<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBusiness extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_do',
        'describe_business',
        'currency',
        'estimate_revenue',
        'long_service',
        'current_bill',
        'customized',
        'user_id'
    ];
}
