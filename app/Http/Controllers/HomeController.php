<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
      $mycolors = \App\Models\mycolor::all();
      return Inertia::render('Home', [
        'mycolors' => $mycolors
      ]);
    }

    public function about()
    {
      return Inertia::render('About');
    }
  }
