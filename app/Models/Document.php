<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ["path", "type", "section_id"];
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }
}
