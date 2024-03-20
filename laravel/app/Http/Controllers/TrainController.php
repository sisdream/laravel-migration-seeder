<?php

namespace App\Http\Controllers;

use App\Models\Trains;

class TrainController extends Controller
{
  public function index() {
    $trains = Trains::all();
    return view('home', compact('trains'));
  }
}