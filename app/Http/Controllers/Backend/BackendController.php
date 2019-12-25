<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    protected $backendPath = 'backend.';
    protected $pagePath = '';

    public function __construct()
    {
        $this->data('title', $this->setTitle('Welcome'));
        $this->pagePath = $this->backendPath . 'pages.';
    }
}
