<?php

namespace App\Http\Controllers;
use App\scart;
use Illuminate\Http\Request;

class ScartController extends Controller
{

    public function index()
    {
        $scarts = scart::all();
        return $scarts;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $scart = new scart();
        $scart->dateCreated = $request->dateCreated;
        $scart->save();
        return $scart;
    }


    public function show($id)
    {
       $scart = scart::find($id);
       return $scart;

    }


    public function edit(scart $scart)
    {
        //
    }


    public function update(Request $request, scart $scart)
    {
        //
    }


    public function destroy(scart $scart)
    {
        //
    }
}
