<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoiceOverPostRequest;
use App\Models\Voiceover;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VoiceoverController extends Controller
{
    //
    public function create(VoiceOverPostRequest $request):JsonResponse{
        $voiceOver = Voiceover::create([
            'text' => $request->get('text'),
        ]);

        return new JsonResponse($voiceOver, 201);
    }
    public function getVoiceOvers(Request $request):JsonResponse{

        return new JsonResponse(Voiceover::all());
    }
}


