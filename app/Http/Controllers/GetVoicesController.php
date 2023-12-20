<?php

namespace App\Http\Controllers;

use App\Models\Voice;
use Illuminate\Http\JsonResponse;

class GetVoicesController extends Controller
{
    public function index():JsonResponse{

        //Conditions pour filtrer la requete.
        return new JsonResponse( Voice::get(),200);

    }
    public function insertionVoices(Request $request):JsonResponse{

        $voice = new Voice();
        $voice->locale= $request->get('locale');
        $voice->gender= $request->get('gender');
        $voice->name= $request->get('name');
        $voice->save();

        return new JsonResponse(Voice::orderBy('created_at','desc')->limit(1)->get(),201);
    }
}
