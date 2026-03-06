<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function __invoke(Request $request)
    {
        return Inertia::render('Project', [
            'slug' => $request->slug
        ]);
    }
}
