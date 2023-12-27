<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParamRequest;
use App\Http\Requests\ParamUpdateRequest;
use App\Models\Param;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
class ParamController extends Controller
{
    public function index(Project $project): JsonResponse{
		return new JsonResponse($project->params, 200);
	}
	
	public function store(Project $project, ParamRequest $request): JsonResponse {
		$maxOrder = $project->params->max('order');
		
		$order = $maxOrder + 1;
		
		// Utiliser la relation entre project et params pour créer le paramètre avec le nouvel ordre
		$param = $project->params()->create([
			'value' => $request->get('value'),
			'order' => $order,
		]);
		
		return new JsonResponse($param, 201);
	}
	
	public function show(Project $project, Param $param): JsonResponse{
		return new JsonResponse($param, 200);
	}
	
	public function update(Project $project, Param $param, ParamUpdateRequest $request): JsonResponse{
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
		
		//Je parcours ma table params avec each qui prend une function callback.
		$projectParams = $project->params->sortBy('order')->values();
		foreach($projectParams as $index => $projectParam){
			$projectParam->update(['order' => $index]);
		}
		/*
		$project->params->{
			
			//Je met a jour avec update qui prend en argument un tableau order c'est le nom de ma colonne que je souhaite mettre a jour et $index + 1 ces la valeur que je souhaite lui assignée.
			$param->update(['order' => $index]);
		});
		*/
		return new JsonResponse(null, 204);
	}
}
