<?php

namespace App\Http\Controllers;

use App\Models\ProvideSkill;
use App\Models\SkillDetail;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\Models\Skill;
use App\Models\WantSkill;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class DetailController extends Controller
{
    //
    public function create(Request $request){

      return json_encode(Auth::user());
    }

    public function store(Request $request){
      $skillDetail = SkillDetail::create([
        'user_id'                  => $request->user_id,
        'hope_comment'           => $request->hope_comment,
        'meeting_url'          => $request->meeting_url,
        'twitter_id'       => $request->twitter_id,
      ]);
      //pSkillsを受け取る
      //複数登録する
      return $request->all();
      // $skillDetail->provide_skills()->create($request->skillDetail->provide_skill);
      // $skillDetail.save();
    }
    public function add_p_skill(Request $request){
      $skillDetail = $this->createDetail($request->auth_id);

      $skill_detail_id =$skillDetail->id;
      $skill_id = null;
      $skill_id = Skill::Where('name',$request->name)->get()->first()->id;

      \Log::debug('@@@'. $skill_id);
      // $skill_id
      $skillDetail->provide_skills()->create([
        'skill_detail_id' => $skill_detail_id,
        'skill_id' => $skill_id,
      ]);
      return $request->all();
    }

    public function add_w_skill(Request $request){
      $skillDetail = $this->createDetail($request->auth_id);
      $skillDetail->want_skills()->create($request->all());
      return $request->all();
    }

    public function test(){
      $result = [];
      foreach(Skill::all() as $val){
        $result[] = $val->name;
      }
      return $result;
    }

    public function createDetail($auth_id){
      $skillDetail = null;

      try {
        $skillDetail = SkillDetail::where('user_id',$auth_id)->first();
      } catch (e) {

      }

      if($skillDetail == null)
      $skillDetail = SkillDetail::create(['user_id' => $auth_id]);

      return $skillDetail;
    }

    public function createSkill(Request $request){
      return Skill::create($request->all());
    }
}
