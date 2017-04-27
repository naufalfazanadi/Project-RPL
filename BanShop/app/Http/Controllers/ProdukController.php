<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ban;

class ProdukController extends Controller
{
  public function index() {
    $data = Ban::all();

    return view('produk', compact('data'));
  }

  public function single($id_ban) {
    $data = Ban::where('id_ban', $id_ban)->get();

    return view('single', compact('data'));
  }
}
