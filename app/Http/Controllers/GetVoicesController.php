<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoiceOverPostRequest;
use App\Models\Voice;
use App\Models\Voiceover;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
<<<<<<< Updated upstream
use App\Http\Requests\VoicePostRequest;
=======
>>>>>>> Stashed changes

class GetVoicesController extends Controller
{
    public function index(Request $request):JsonResponse{

       $getGender=  $request->get('gender');
       $getName = $request->get('name');

<<<<<<< Updated upstream
        //Retour de la function et Conditions pour filtrer la requete.
        return new JsonResponse( Voice::where('gender', $getGender)->where('name', $getName)->orderBy('updated_at', 'desc')->get(), 200);
=======

        //Retour de la function et Conditions pour filtrer la requete.
        return new JsonResponse( Voice::where('gender',$getGender)->where('name', $getName)->orderBy('updated_at', 'desc')->get(),200);

    }
    public function locale(Request $request):JsonResponse{
        $getLocal = $request->get('locale');

        //return new JsonResponse( Voice::where('locale',$getLocal)->orderBy('created_at','desc')->get(),200);
        return new JsonResponse( Voice::where('locale',$getLocal)->orderBy('created_at','desc')->limit(5)->get(),200);
>>>>>>> Stashed changes

    }
    public function locale(Request $request):JsonResponse{
        $getLocal = $request->get('locale');

        //return new JsonResponse( Voice::where('locale',$getLocal)->orderBy('created_at','desc')->get(),200);
        return new JsonResponse( Voice::where('locale', $getLocal)->orderBy('created_at', 'desc')->limit(5)->get(), 200);

    }
    public function insertionVoices(VoicePostRequest $request):JsonResponse{

        $voice = new Voice();
        $voice->locale= $request->get('locale');
        $voice->gender= $request->get('gender');
        $voice->name= $request->get('name');
        $voice->save();

        return new JsonResponse(Voice::orderBy('created_at', 'desc')->limit(1)->get(), 201);
    }


}
