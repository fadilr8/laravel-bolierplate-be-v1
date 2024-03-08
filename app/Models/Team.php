<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo_url',
        'deskripsi',
        'achievement',
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }
}
