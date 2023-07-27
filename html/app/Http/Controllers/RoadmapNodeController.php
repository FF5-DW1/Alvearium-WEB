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
        $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $roadmapNodes = new RoadmapNode();
        $roadmapNodes->phase = $request->phase;
        $roadmapNodes->year_interval = $request->year_interval;
        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store(
                'roadmap', 'images'
            );

            $roadmapNodes->image_path = $path; 
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
        if (!RoadmapNode::exists($id)) {
            return redirect()->route('roadmaps.index');
        }
    
        $roadmapNode = RoadmapNode::find($id);
        return view('roadmapNodes.edit-roadmap', compact('roadmapNode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $roadmapNode = RoadmapNode::find($id);
        $roadmapNode->phase = $request->phase;
        $roadmapNode->year_interval = $request->year_interval;
        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store(
                'roadmap', 'images'
            );

            $roadmapNode->image_path = $path; 
        }
        $roadmapNode->title = $request->title;
        $roadmapNode->save();
    
        return redirect()->route('roadmaps.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        if (!RoadmapNode::exists($id)) {
            return redirect()->route('roadmaps.index');
        }
    
        $roadmapNodes = RoadmapNode::find($id);
        $roadmapNodes->delete();
        Storage::disk('images')->delete($roadmapNodes->image_path);
        return redirect()->route('roadmaps.index');
    }
   
}
