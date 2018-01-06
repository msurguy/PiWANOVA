<?php

namespace App\Http\Controllers;

class SignaturesController extends Controller
{
    /**
     * Display the GuestBook homepage.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {   
        $path = storage_path() . "/json/dashboard.json";
        $dashboardData = json_decode(file_get_contents($path), true); 
        return view('signatures.index')->with('dashboard', $dashboardData);
    }

    /**
     * Display the GuestBook form page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('signatures.sign');
    }
}