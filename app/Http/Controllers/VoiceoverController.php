<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoiceOverPostRequest;
use App\Models\Voiceover;
use Illuminate\Http\JsonResponse;

class VoiceoverController extends Controller
{
    //
    public function create(VoiceOverPostRequest $request):JsonResponse{
        $voiceOver = Voiceover::create([
            'text' => $request->get('text'),
        ]);

        return new JsonResponse($voiceOver, 201);
    }
}
