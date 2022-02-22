<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albumes';

    public $fillable = ['titulo', 'autor'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function temas()
    {
        return $this->hasMany(Tema::class);
    }

}
