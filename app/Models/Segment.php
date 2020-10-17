<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    use HasFactory;
    public function segment_logics(){
        return $this->hasMany(SegmentLogic::class);
    }
}
