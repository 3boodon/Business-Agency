<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ["name", "description", 'isActive'];
    public function documents()
    {
        return $this->hasMany('App\Models\Document');
    }
}
