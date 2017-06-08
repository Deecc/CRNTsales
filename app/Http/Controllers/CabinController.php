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

    public function attachClient(Request $request)
    {
        $cabin = Cabin::findOrFail($request->id);
        $cabin->client_id = $request->client_id;
        if($cabin->save())
        {
            return response(['message' => 'sucessfull'], 200);
        }
        else
        {
            return response(['message' => 'error!'], 500);
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

        $cabin->client;
        $cabin->user;

        return $cabin;
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
