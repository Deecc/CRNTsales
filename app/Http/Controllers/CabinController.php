<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabin;

class CabinController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabins = Cabin::all();

        return view('cabin.index', ['cabins' => $cabins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cabin = new Cabin;
        $cabin->fill($request->all());

        if ($cabin->save()) {
            return response($cabin, 201);
        } else {
            return response(['error' => ['code' => '500', 'message' => 'Failed to create a new cabin!']], 500);
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
        $cabin = Cabin::findOrFail($id);

        return view('cabin.show', $cabin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cabin = Cabin::findOrFail($id);

        return view('cabin.edit', $cabin);
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
        $cabin = Cabin::findOrFail($id);
        $cabin->fill($request->all());

        if ($cabin->save()) {
            return response($cabin, 201);
        } else {
            return response(['error' => ['code' => '500', 'message' => 'Failed to update the cabin!']], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cabin = Cabin::findOrFail($id);

        if ($cabin->delete()) {
            return response(true, 200);
        } else {
            return response(['error' => ['code' => '500', 'message' => 'Failed to delete the cabin!']], 500);
        }
    }
}
