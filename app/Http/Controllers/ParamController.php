<?php

namespace App\Http\Controllers;

use App\Models\Param;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ParamController extends Controller
{
    public function index(Project $project): JsonResponse{
		return new JsonResponse($project->params);
	}
	
	public function store(Project $project,Request $request): JsonResponse{
		$param = Param::create([
			'value' => $request->get('value'),
			'order' => $request->get('order'),
			'project_id' => $project->id,
		]);
		
		return new JsonResponse($param, 201);
	}
	
	public function show(Project $project, Param $param): JsonResponse{
		return new JsonResponse($param, 200);
	}
	
	public function update(Project $project, Param $param, Request $request): JsonResponse{
		if($request->get('value') != null ){
			$param->value = $request->get('value');
		}
		if($request->get('order') != null ){
			$param->order = $request->get('order');
		}
		$param->save();
		return new JsonResponse($param, 200);
	}
	
	public function destroy(Project $project, Param $param): JsonResponse{
		$param->delete();
		return new JsonResponse(null, 204);
	}
}
