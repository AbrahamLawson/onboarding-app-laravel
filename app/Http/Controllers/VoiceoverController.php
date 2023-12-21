<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoiceOverPostRequest;
use App\Models\Voiceover;
use Illuminate\Http\JsonResponse;

class VoiceoverController extends Controller
{
    //
    public function store(VoiceOverPostRequest $request): JsonResponse
    {
        $voiceOver = Voiceover::create([
            'text' => $request->get('text'),
        ]);

        return new JsonResponse($voiceOver, 201);
    }
    public function index(): JsonResponse
    {

        return new JsonResponse(Voiceover::all(), 200);
    }
    public function destroy(Voiceover $voiceover): JsonResponse
    {
        $voiceover->delete();

        return new JsonResponse(null, 204);

    }
    public function show(Voiceover $voiceover): JsonResponse
    {

        return new JsonResponse($voiceover, 200);
    }
}
