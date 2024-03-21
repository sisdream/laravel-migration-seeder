<?php

namespace App\Http\Controllers;

use App\Models\Trains;

class TrainController extends Controller
{
  public function index() {
    $trains = Trains::whereDate("orario_partenza", today()->toDateString())->get();
    return view('home', compact('trains'));
  }
}