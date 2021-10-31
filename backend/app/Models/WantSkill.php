<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WantSkill extends Model
{
    use HasFactory;
    public function skill_details()
    {
        return $this->belongsToMany('App\SkillDetail');
    }
}
