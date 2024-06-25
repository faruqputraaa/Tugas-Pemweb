<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'full_address', 'image_path', 'user_id', 'price', 'weight', 'phone_number', 'city', 'district', 'description'
        // tambahkan kolom lain yang sesuai kebutuhan
    ];
}
