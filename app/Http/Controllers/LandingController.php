<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Mentor;
use Illuminate\Http\Request;

class LandingController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $mentors = Mentor::all();
        return view('public.index', compact(['blogs','mentors']));
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
        

    //     return view('public.index', compact('mentors'));
    // }

}
