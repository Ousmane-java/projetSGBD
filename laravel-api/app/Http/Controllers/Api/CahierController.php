<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Cahier;
class CahierController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api')->except('index','show');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cahier = Cahier::all();
        if ($cahier->count() > 0) {
            return response()->json([
                "status"=> 200,
                "cahier"=> $cahier
            ], 200);
        }else{
            return response()->json([
                "status"=> 404,
                "message"=> "No records found"
            ],404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Assurez-vous que l'utilisateur est authentifié
    $user = Auth::user();

    $validator = Validator::make($request->all(), [
        "contenu"=> "string",
        "date"=> "date",
        "heure"=> "string",
        "cours"=> "string",
        "nom"=> "date",
    ]);

    if ($validator->fails()) {
        return response()->json([
            "status"=> 422,
            "message"=> $validator->errors()->first(),
        ], 422);
    } else {
        // Créez un nouveau cahier et associez l'ID de l'utilisateur connecté
        $cahier = Cahier::create([
            "contenu"=> $request->contenu,
            "date"=> $request->date,
            "heure"=> $request->heure,
            "cours"=> $request->cours,
            "nom"=> $request->nom,
            // "idUser"=> $user->id, // Associez l'ID de l'utilisateur
        ]);

        if ($cahier) {
            return response()->json([
                "status"=> 200,
                "message"=> "Cahier created Successfully"
            ], 200);
        } else {
            return response()->json([
                "status"=> 500,
                "message"=> "Something went wrong"
            ],500);
        }
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
