<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'user_id', 'designerName', 'title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
