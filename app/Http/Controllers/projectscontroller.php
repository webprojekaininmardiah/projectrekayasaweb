<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Http\Controllers\Controller; // Ditambahkan agar extends Controller aman

class ProjectsController extends Controller
{
    public function index()
    {
        // Mengubah nama variabel menjadi $projects agar sesuai dengan compact
        $projects = project::paginate(6);

        return view('page.project', compact('projects'));
    }

    public function show($id)
    {
        $project = project::findOrFail($id);

        return view('page.project-detail', compact('project'));
    }
}
