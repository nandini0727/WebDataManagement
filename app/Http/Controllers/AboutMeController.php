<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutMe;

class AboutMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutmes = AboutMe::all()->toArray();

        return view('aboutmes.index', compact('aboutmes'));
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
        //
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
        $aboutmes = AboutMe::find($id);

return view('aboutmes.edit',compact('aboutmes','id'));
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
        $request->validate([

            'phone' => 'required|numeric',

            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'nationality' => 'required',
            'role' => 'required',
            'content' => 'required',
            'skype' => 'required',
            'website' => 'required',
      
        ]);

        $aboutmes = new AboutMe();
        //print_r($aboutmes);

        $aboutmes = AboutMe::find($id);

        $aboutmes->Name = $request->get('name');

        $aboutmes->Phone = $request->get('phone');

        $aboutmes->Address = $request->get('address');
        $aboutmes->Email = $request->get('email');

        $aboutmes->DOB = $request->get('dob');

        $aboutmes->Nationality = $request->get('nationality');
        $aboutmes->Role = $request->get('role');
        $aboutmes->Skype = $request->get('skype');
        $aboutmes->Website = $request->get('website');

        $aboutmes->Content = $request->get('content');

    
        if ($request->hasFile('pimage')) {
            $image = $request->file('pimage');
            $imageName = $request->file('pimage')->getClientOriginalName();
            $name = $imageName;
            $destinationPath = public_path('/assets');
            $image->move($destinationPath, $name);
            $aboutmes->ProfileImage = $name;
        }
        if ($request->hasFile('signature')) {
            $image = $request->file('signature');
            $imageName = $request->file('signature')->getClientOriginalName();
            $name = $imageName;
            $destinationPath = public_path('/assets');
            $image->move($destinationPath, $name);
            $aboutmes->Signature = $name;
        }

        $aboutmes->save();
        return redirect('aboutmes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
