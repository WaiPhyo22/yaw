<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'festival_date', 'town_id', 'description', 'image'];

    public function town()
    {
        return $this->belongsTo(Town::class);
    }

    public function traditions()
    {
        return $this->hasMany(Tradition::class);
    }
}
