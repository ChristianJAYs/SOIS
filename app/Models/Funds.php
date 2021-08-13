<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funds extends Model
{
    use HasFactory;

    protected $fillable = [
        'fund_name','fund_description','fund_goal','fund_collected','fund_status',
    ];
}
