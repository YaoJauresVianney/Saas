<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team_invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'team_id',
        'token'
    ];
}
