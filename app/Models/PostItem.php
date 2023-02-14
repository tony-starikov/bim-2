<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function type()
    {
        return $this->hasOne(ItemType::class);
    }
}
