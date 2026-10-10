<?php

namespace App\Http\Controllers;

use app\Models\project;

class projectcontroller extends Controller
{
    //
    public function index()
{ 
    $project = project::paginate(6);

    return view('page.project', compact('projects'));

}
    public function show($id)
    {
        $project = project::findorfail($id);

        return view('page.project-detail', compact('project'));
    }
}
