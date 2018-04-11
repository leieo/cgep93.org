<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunitylifeController extends Controller
{
  public function communitylife(){
      return view('communitylife');
  }
  public function summary(){
    return view('summary');
  }
  public function paperstatements(){
    return view('paperstatements');
  }
  public function bulletins(){
    return view('bulletins');
  }
  public function genecole(){
    return view('genecole');
  }
  public function events(){
    return view('events');
  }
}
