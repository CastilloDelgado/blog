<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class PostImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset('storage/' . $value)
        );
    }
}
