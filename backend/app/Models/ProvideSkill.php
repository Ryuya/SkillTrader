<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvideSkill extends Model
{
  protected $fillable = ['skill_detail_id','skill_id'];
    use HasFactory;
    public function skill_details()
    {
        return $this->belongsToMany('App\Models\SkillDetail');
    }
}
