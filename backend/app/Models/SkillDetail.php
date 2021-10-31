<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SkillDetail extends Model
{
    protected $fillable = ['user_id','hope_comment','meeting_url','twitter_id'];
    use HasFactory;
    public function provide_skills()
    {
        return $this->belongsToMany('App\Models\ProvideSkill');
    }
    public function want_skills()
    {
        return $this->belongsToMany('App\ModelsWantSkill');
    }
    public function user(){
      return $this->hasOne(User::class);
    }
}
