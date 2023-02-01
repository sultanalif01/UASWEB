<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = Mentor::all();

        return view('mentors.index', compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mentors.create');
    }
    /**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'profession' => 'required',
        'description' => 'required'
    ]);

    $mentor = new Mentor();
    $mentor->name = $request->name;
    $mentor->profession = $request->profession;
    $mentor->description = $request->description;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $mentor->photo = $name;
    }

    $mentor->save();

    return redirect()->route('mentors.index')->with('success', 'Mentor created successfully.');
}

/**
 * Display the specified resource.
 *
 * @param  \App\Mentor  $mentor
 * @return \Illuminate\Http\Response
 */
public function show(Mentor $mentor)
{
    return view('mentors.show', compact('mentor'));
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Mentor  $mentor
 * @return \Illuminate\Http\Response
 */
public function edit(Mentor $mentor)
{
    return view('mentors.edit', compact('mentor'));
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Mentor  $mentor
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, Mentor $mentor)
{
    $request->validate([
        'name' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'profession' => 'required',
        'description' => 'required'
    ]);

    $mentor->name = $request->name;
    $mentor->profession = $request->profession;
    $mentor->description = $request->description;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $mentor->photo = $name;
    }

    $mentor->save();
    return redirect()->route('mentors.index')->with('success', 'Mentor updated successfully.');
}
/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Mentor  $mentor
 * @return \Illuminate\Http\Response
 */
public function destroy(Mentor $mentor)
{
    $mentor->delete();
    return redirect()->route('mentors.index')->with('success', 'Mentor deleted successfully.');
}
}