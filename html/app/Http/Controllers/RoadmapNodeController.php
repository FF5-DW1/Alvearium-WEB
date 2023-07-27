<?php

namespace App\Http\Controllers;

use App\Models\RoadmapNode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RoadmapNodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roadmapNodes = RoadmapNode::all();
        return view('roadmapNodes.index-roadmap', compact('roadmapNodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roadmapNodes = new RoadmapNode();
        $roadmapNodes->phase = $request->phase;
        $roadmapNodes->year_interval = $request->year_interval;
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $path = Storage::putFile('imagenesBaseDatos', $request->file('image_path'));
            $nuevo_path = str_replace('public/img', '', $path);
            $roadmapNodes->image_path = $nuevo_path;
        }

        $roadmapNodes->title = $request->title;
        $roadmapNodes->save();

        return redirect()->route('roadmaps.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $roadmapNodes = RoadmapNode::find($id);
        $roadmapNodes->delete();
        return redirect()->route('roadmapNodes.index');
    }
}
