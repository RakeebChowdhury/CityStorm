<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
  public function index(){
    //Retrieve all from the Projects table
    $projects = Project::where('user_id', Auth::id())->get();

    //pass down data to view
    return view('account/projects/index', compact('projects'));
  }

  public function create(){
    return view('account/projects/create');
  }

  public function store(Request $request){

    $project = new Project();

    $project::create([
      "title" => $request->title,
      "user_id" => Auth::id(),
    ]);

    return redirect('account/projects');
  }

  public function show($id){
    $project = Project::where('id', $id)->first();
    // return $project->inspirations;

    return view('account/projects/show', compact('project'));
  }

  public function edit($id){
    $project = Project::where('id', $id)->first();
    // return $project->inspirations;

    return view('account/projects/edit', compact('project'));
  }

  public function update(Request $request, $id){
    Project::where('id', $id)->where('user_id', Auth::id())->update(["title" => $request->title]);

    return back();
  }

  public function destroy($id){
    $project = Project::where('id', $id)->first();
    if($project->user_id == Auth::id()){
      $project->deleteRelated();
      return redirect('account/projects');
    } else{
      return redirect('account/projects');
    }

  }

}
