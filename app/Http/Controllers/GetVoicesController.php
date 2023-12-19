<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetVoicesController extends Controller
{
    //
    public function index():JsonResponse{
        $voices = [
            'id' => 1,
            'language' => "fr-FR",
            'name' => "Denise",
            'gender' => "Female",
            'created_at' => "2023-01-01 08:08:00",
            'updated_at' => "2023-01-02 08:08:00",
            [
                'id' => 2,
                'language' => "en-GB",
                'name' => "Ryan",
                'gender' => "Male",
                'created_at' => "2023-01-01 08:08:00",
                'updated_at' => "2023-01-02 08:08:00",
            ],
            [
                'id' => 3,
                'language' => "en-GB",
                'name' => "Elodie",
                'gender' => "Female",
                'created_at' => "2023-01-01 08:08:00",
                'updated_at' => "2023-01-02 08:08:00",
            ],
            [
                'id' => 4,
                'language' => "en-GB",
                'name' => "Jules",
                'gender' => "Male",
                'created_at' => "2023-01-01 08:08:00",
                'updated_at' => "2023-01-02 08:08:00",
            ]
        ];
        return new JsonResponse($voices,200);
    }
}
