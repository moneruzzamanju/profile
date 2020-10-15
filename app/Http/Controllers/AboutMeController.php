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
        return view('backend.about.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
          'name' => ['required','string','min:3','max:35'],
          'email' => ['required','string','min:15','max:50'],
          'phone' => ['required','string','min:11','max:11'],
          'about_me_short' => ['required'],
          'about_me_long' => ['required'],
          'gender' => ['required'],
          'marital_status' => ['required'],
          'nationality' => ['required'],
          'dob' => ['required'],
       ],
           [
               'name.required' => 'Full Name Required',
               'email.required' => 'Email Required'
        ]);

       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['phone'] = $request->email;
       $data['about_me_short'] = $request->about_me_short;
       $data['about_me_long'] = $request->about_me_long;
       $data['gender'] = $request->gender;
       $data['marital_status'] = $request->marital_status;
       $data['nationality'] = $request->nationality;
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
