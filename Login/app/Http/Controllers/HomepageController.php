<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomepageController extends Controller
{
  public function showHomepage()
  {
    return View::make('welcome');
  }
}