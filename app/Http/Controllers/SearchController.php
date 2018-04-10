<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function search(){
      return view('search');
  }
  public function geneabank(){
      return view('geneabank');
  }
  public function bigenet(){
      return view('bigenet');
  }
  public function tips(){
      return view('tips');
  }
  public function department(){
      return view('department');
  }
  public function archives(){
      return view('archives');
  }
  public function links(){
      return view('links');
  }
  public function worldresearch(){
      return view('worldresearch');
  }
}
