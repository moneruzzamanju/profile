<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.create');
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
          'name' => ['required','string','min:5','max:35'],
          'email' => ['required'],
          'aboutme1' => ['required'],
       ]);

       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['aboutme1'] = $request->aboutme1;
       $data['aboutme2'] = $request->aboutme2;
       $data['dob'] = $request->dob;

       AboutMe::create($data);

       session()->flash('success','Successfully Added');
       return redirect()->route('aboutme.create');

       // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutMe  $aboutMe
     * @return \Illuminate\Http\Response
     */
    public function show(AboutMe $aboutMe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutMe  $aboutMe
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutMe $aboutMe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutMe  $aboutMe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutMe $aboutMe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutMe  $aboutMe
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutMe $aboutMe)
    {
        //
    }
}
