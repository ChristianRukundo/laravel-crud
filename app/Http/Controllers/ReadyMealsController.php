<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreReadyMealRequest;
use App\Http\Requests\UpdateReadyMealsRequest;
use App\Http\Resources\ReadyMealResource;
use App\Models\Meal;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;


class ReadyMealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *e
     */
    public function index()
    {
        $meals =   ReadyMealResource::collection(Meal::all());
        return view('ready-meal')->with('meals', $meals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     *
     */
    public function store(StoreReadyMealRequest $request)
    {
        $fileImage = $request->file('image');
        $pathImage = $fileImage->store('', 'public');
        $imgUrl = Storage::url($pathImage);
        $video = new Meal();
        $video->title = $request->input('title');
        $video->description = $request->input('description');
        $video->imgUrl = $imgUrl;
        if ($video->save()) {
            return redirect()->route('ready-meal')->with('success', 'Video successfully added');
        } else {
            return redirect()->back()->with('error', 'Failed to create video');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $User
     *
     */
    public function show(Meal $meal)
    {
        return ReadyMealResource::make($meal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReadyMealsRequest  $request
     * @param  \App\Models\Category  $category
     *
     */
    public function update(UpdateReadyMealsRequest $request, $id)
    {
        $meal = Meal::findOrFail($id);

        // Update the meal properties with the user-provided values
        $meal->title = $request->input('title', $meal->title);
        $meal->description = $request->input('description', $meal->description);

        // Check if a new image file was provided
        if ($request->hasFile('image')) {
            $fileImage = $request->file('image');
            $pathImage = $fileImage->store('', 'public');
            $imgUrl = Storage::url($pathImage);
            $meal->imgUrl = $imgUrl;
        }

        if ($meal->save()) {
            return redirect()->route('ready-meal')->with('success', 'Video successfully updated');
        } else {
            return redirect()->back()->with('error', 'Failed to update video');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $category
     *
     */
    public function destroy(Meal $id)
    {

        if ($id->delete()) {
            return redirect()->route('ready-meal')->with('success', 'Video successfully deleted');
        } else {
            return redirect()->back()->with('error', 'Failed to delete video');
        }
    }
}
