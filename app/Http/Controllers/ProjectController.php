<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectPostRequest;

class ProjectController extends Controller
{
    public function index(): JsonResponse
    {
        return new JsonResponse(Project::all(), 200);
    }

    public function store(ProjectPostRequest $request): JsonResponse
    {
        $project = Project::create([
            'title' => $request->get('title'),
			'description' => $request->get('description'),
        ]);
        return new JsonResponse($project, 201);
    }

    public function show(Project $project): JsonResponse
    {
        return new JsonResponse($project, 200);
    }

    public function destroy(Project $project): JsonResponse
    {
        $project->delete();
        return new JsonResponse(null, 204);
    }

    public function update(Project $project, ProjectUpdateRequest $request): JsonResponse
    {
		if($request->get('description') != null ){
			$project->description = $request->get('description');
		}
		if($request->get('title') != null ){
			$project->title = $request->get('title');
		}
		$project->save();
		
        return new JsonResponse($project);
	
    }
}
