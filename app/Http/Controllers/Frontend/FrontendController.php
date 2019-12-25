<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    protected $frontendPath = 'frontend.';
    protected $pagePath = '';

    public function __construct()
    {
        $this->data('title', $this->setTitle('Welcome'));
        $this->pagePath = $this->frontendPath . 'pages.';
    }
}
