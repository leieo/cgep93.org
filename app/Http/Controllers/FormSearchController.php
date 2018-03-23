<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormSearchController extends Controller

{
    public function search() {
        return view('formsearch');
    }

}

