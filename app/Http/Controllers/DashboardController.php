<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard', [
            'name' => 'John Doe',
            'age' => '25',
            'frameworks' => [
                'Laravel',
                'Vue',
                'Inertia',
            ],
        ]);
    }
    /**
     * Show all the posts.
     */
    public function posts()
    {
        sleep(2);
        return Inertia::render('Posts');
    }



    /**
     * Show the application settings.
     */
    public function settings()
    {
        return Inertia::render('Settings');
    }
}
