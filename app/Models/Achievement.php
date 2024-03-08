<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'achievement',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
