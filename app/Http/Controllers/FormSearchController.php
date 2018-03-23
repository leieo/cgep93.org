<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromSearchController extends Controller

{
    public function search() {
        return view('formsearch');
    }

}

