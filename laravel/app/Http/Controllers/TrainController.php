<?php

namespace Train\Http\Controllers;

use App\Models\Trains;

class TrainController extends Controller
{
  public function index() {
    $movies = Trains::all();
    return view('home', compact('trains'));
  }
}