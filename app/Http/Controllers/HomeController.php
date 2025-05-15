<?php

namespace App\Http\Controllers;

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
     * Show the application home page.
     *
     */
    public function index()
    {
        return Inertia::render('App', [
            'user' => 'ME'
        ]);
    }
}
