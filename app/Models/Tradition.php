<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tradition extends Model
{
    use HasFactory;
    protected $fillable = ['festival_id', 'title', 'image', 'description'];

    public function festival()
    {
        return $this->belongsTo(Festival::class);
    }
}
