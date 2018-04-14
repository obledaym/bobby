<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AssociationRequest;
use App\Http\Controllers\Controller;
use App\BookingLine;

class BookingLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $bookinglines = BookingLine::get();
        return response()->json($bookinglines, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $bookingline = BookingLine::create($request->all());
        if($bookingline)
        {
            return response()->json($bookingline, 200);
        }
        else
        {
            return response()->json(["message" => "Impossible de créer l'objet"], 500);
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
        $bookingline = BookingLine::find($id);
        if($bookingline)
            return response()->json($bookingline, 200);
        else
            return response()->json(["message" => "Impossible de trouver l'objet"], 500);
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
        $bookingline = BookingLine::find($id);
        if($bookingline){
            $value = $bookingline->update($request->input());
            if($value)
                return response()->json($value, 201);
            return response()->json(['message'=>'An error ocured'],500);
        }
        return response()->json(["message" => "Impossible de trouver l'objet"], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $bookingline = BookingLine::find($id);
        if ($bookingline)
        {
            $bookingline->delete();
            return response()->json([], 200);
        }
        else
            return response()->json(["message" => "Impossible de trouver l'objet"], 500);
    }
    
}