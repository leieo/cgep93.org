<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssociationController extends Controller
{
  public function association()
  {
      return view('association');
  }
  public function membresCA()
  {
    return view('membresCA');
  }
  public function règlement()
  {
    return view('règlement');
  }
  public function adhésions()
  {
    return view('adhésions');
  }
  public function infospratiques()
  {
    return view('infospratiques');
  }
  public function nouscontacter()
  {
    return view('nouscontacter');
  }
}
