<?php

namespace App\Http\Controllers;

use App\Helpers\LayoutHelper;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     */
    public function index()
    {
        return Inertia::render('Welcome', [
            'user' => 'ME'
        ]);
    }
}
