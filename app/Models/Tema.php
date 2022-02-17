<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $casts = [
        'duracion' => 'interval',
    ];

    public $fillable = ['nombre', 'duracion', 'album_id'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
