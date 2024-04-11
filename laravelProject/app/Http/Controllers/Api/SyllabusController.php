<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Syllabus;

class SyllabusController extends Controller
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
        $syllabus = Syllabus::all();
        if ($syllabus->count() > 0) {
            return response()->json([
                "status"=> 200,
                "syllabus"=> $syllabus
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
        "contenu"=> "required|string",
        "nombreHeures"=> "required|integer",
        "objectif"=> "required|string",
        "titre"=> "required|string",
        "evaluation"=> "required|string",
        "dateCC"=> "required|date",
        "dateDS"=> "required|date",
        "resource"=> "required|string",
        "politiqueCours"=> "required|string",
    ]);

    if ($validator->fails()) {
        return response()->json([
            "status"=> 422,
            "message"=> $validator->errors()->first(),
        ], 422);
    } else {
        // Créez un nouveau syllabus et associez l'ID de l'utilisateur connecté
        $syllabus = Syllabus::create([
            "contenu"=> $request->contenu,
            "nombreHeures"=> $request->nombreHeures,
            "objectif"=> $request->objectif,
            "titre"=> $request->titre,
            "evaluation"=> $request->evaluation,
            "dateCC"=> $request->dateCC,
            "dateDS"=> $request->dateDS,
            "resource"=> $request->resource,
            "politiqueCours"=> $request->politiqueCours,
            "idUser"=> $user->id, // Associez l'ID de l'utilisateur
        ]);

        if ($syllabus) {
            return response()->json([
                "status"=> 200,
                "message"=> "Syllabus created Successfully"
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
