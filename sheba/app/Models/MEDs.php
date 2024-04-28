<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_e_ds extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'type', 'image'];
}
