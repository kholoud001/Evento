<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;
    protected $table = 'lieu';

    protected $fillable = [
        'ville'
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

}
