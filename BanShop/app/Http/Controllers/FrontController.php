<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ban;

class FrontController extends Controller
{
    public function index() {
      $data = Ban::all()->sortBy('updated_at');

      return view('front', compact('data'));
    }
}
