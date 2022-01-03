<?php

namespace App\Http\Controllers\Admin;

use App\Facility;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::all();
        return view('admin.facilities.index', compact('facilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'sometimes|max:255|unique:facilities',
            'message' => 'sometimes|max:1000',
            'image' => 'sometimes|image|mimes:jpg,png,bmp,jpeg'
        ]);
        // Image
        $image = $request->image;
        $imageName = Str::slug($request->title, '-') . uniqid() . '.' . $image->getClientOriginalExtension();

        if (!Storage::disk('public')->exists('service')) {
            Storage::disk('public')->makeDirectory('service');
        }

        $serviceImage = Image::make($image)->resize(640, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->stream();

        // Store in storage public/category
        Storage::disk('public')->put('service/' . $imageName, $serviceImage);
        //
        $team = new Facility();
        $team->title = $request->title;                  // Php Js Html
        $team->message = $request->message;
        $team->image = $imageName;
        $team->save();
        return redirect()->back();
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
        if ($request->title == Facility::findOrFail($id)->title) {
            $this->validate($request, [
                'title' => 'sometimes|max:255',
                'message' => 'sometimes|max:1000',
                'image' => 'sometimes|image|mimes:jpg,png,bmp,jpeg'

            ]);
        } else {
            $this->validate($request, [
                'title' => 'sometimes|max:255',
                'message' => 'sometimes|max:1000',
                'image' => 'sometimes|image|mimes:jpg,png,bmp,jpeg'

            ]);
        }

        $about = Facility::findOrFail($id);
        if ($request->image != null) {
            // Image
            $image = $request->image;
            $imageName = Str::slug($request->name, '-') . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('service')) {
                Storage::disk('public')->makeDirectory('service');
            }
            // Delete old Image
            if (Storage::disk('public')->exists('service/' . $about->image)) {
                Storage::disk('public')->delete('service/' . $about->image);
            }
            // Store
            // $image->storeAs('category', $imageName, 'public');
            $serviceImage = Image::make($image)->resize(640, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->stream();
            Storage::disk('public')->put('service/' . $imageName, $serviceImage); //The put method may be used to store raw file contents on a disk
        } else {
            $imageName = $about->image;
        }

        $team = Facility::findOrFail($id);
        $team->title = $request->title;                  // Php Js Html
        $team->message = $request->message;
        $team->image = $imageName;
        $team->save();
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Facility::findOrFail($id);
        Storage::disk('public')->delete('team/' . $team->image);
        $team->delete();
        return redirect()->back();
    }
}
