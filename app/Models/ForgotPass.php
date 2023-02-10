<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForgotPass extends Model
{
    private $fillable = [
        'email',
        'temp_pass'
    ];
    use HasFactory;
}
