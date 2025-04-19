<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'description'];

    public function villages()
    {
        return $this->hasMany(Village::class);
    }

    public function festivals()
    {
        return $this->hasMany(Festival::class);
    }
}
