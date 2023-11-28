<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity', 'price'];

    public const PRODUCT_IMAGE = 1;

    public function image()
    {
        return $this->hasOne(gallery::class);
    }
}