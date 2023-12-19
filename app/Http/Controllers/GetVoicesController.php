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
}
