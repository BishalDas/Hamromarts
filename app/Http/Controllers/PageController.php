<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function categoriesviewall()
    {
        return view('Frontend.Pages.categories.categories');
    }

    public function Foodviewall()
    {
        return view('Frontend.Pages.subcategory.Foods_and_beverage');
    }
}
