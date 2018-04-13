<?php
/**
 * Created by PhpStorm.
 * User: Zephor
 * Date: 4/9/18
 * Time: 11:30 AM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function Event()
    {
        return view('events');
    }
}
