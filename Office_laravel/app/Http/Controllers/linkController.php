<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class linkController extends Controller
{
    public function index()
  {
  return view('link');
  }

}
