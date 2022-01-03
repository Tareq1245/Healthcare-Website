<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Models\About;
use App\Service;
//use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
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
            'title' => 'sometimes|max:255|unique:services',
            'message' => 'sometimes|max:1000',
            'property_title' => 'sometimes|max:255|unique:services',
            'property_message' => 'sometimes|max:1000',
        ]);


        //
        $service = new Service();
        $service->title = $request->title;                  // Php Js Html
        $service->message = $request->message;
        $service->property_title = $request->property_title;                  // Php Js Html
        $service->property_message = $request->property_message;

        $service->save();
//        Toastr::success('Service Created Successfully!');
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
        if ($request->title == Service::findOrFail($id)->title) {
            $this->validate($request, [
                'title' => 'sometimes|max:255',
                'message' => 'sometimes|max:1000',
                'property_title' => 'sometimes|max:255',
                'property_message' => 'sometimes|max:1000',

            ]);
        } else {
            $this->validate($request, [
                'title' => 'sometimes|max:255',
                'message' => 'sometimes|max:1000',
                'property_title' => 'sometimes|max:255',
                'property_message' => 'sometimes|max:1000',

            ]);
        }

        $service = Service::findOrFail($id);
        $service->title = $request->title;                  // Php Js Html
        $service->message = $request->message;
        $service->property_title = $request->property_title;                  // Php Js Html
        $service->property_message = $request->property_message;
        $service->save();
//        Toastr::success('Service updated successfully','Success');
        return redirect()->route('admin.services.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        Storage::disk('public')->delete('service/' . $service->image);
        $service->delete();
//        Toastr::success('Service deleted successfully');
        return redirect()->back();
    }
}
