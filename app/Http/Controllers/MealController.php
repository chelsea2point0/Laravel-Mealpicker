<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = \App\Meal::all();
        return view('meals.index', ['meals' => $meals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meal = new \App\Meal([
            'name'         => $request->get('name'),
            'minutes'      => $request->get('minutes'),
            'description'  => $request->get('description'),
            'instructions' => $request->get('instructions'),
            //'image_path'   => $request->get('image_path'),
            'serves'       => $request->get('serves'),
            'difficulty'   => $request->get('difficulty')
        ]);
        $meal->save();

        return redirect('/meals');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meal = \App\Meal::find($id);
        return view('meals.edit', (['meal' => $meal, 'id' => $id]));
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
        $meal = \App\Meal::find($id);
        $meal->name = $request->get('name');
        $meal->minutes = $request->get('minutes');
        $meal->description = $request->get('description');
        $meal->instructions = $request->get('instructions');
        $meal->image_path = $request->get('image_path');
        $meal->serves = $request->get('serves');
        $meal->difficulty = $request->get('difficulty');

        $meal->save();

        return redirect('/meals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meal = \App\Meal::find($id);
        $meal->delete();

        return redirect('/meals');

    }
}
