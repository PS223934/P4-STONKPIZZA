<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'name', 'iids','price', 'imgurl',
    ];

    public function ingredients() {
        return $this->hasMany(Ingredient::class);
    }
}
