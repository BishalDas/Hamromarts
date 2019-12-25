<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function categoriesviewall()
    {
        return view('Frontend.Pages.categories.categories');
    }
}
