<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes = resume::all()->toArray();

        return view('resumes.index', compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resumes.create');
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

            'year' => 'required|numeric',

            'company' => 'required',
            'content' => 'required',
           

        ]);

        $resumes = new Resume();

        $resumes->Year = $request->get('year');

        $resumes->Company = $request->get('company');

        $resumes->Content = $request->get('content');

        $resumes->save();
        return redirect('resumes')->with('success', 'Resume has been added');
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
        $resumes = Resume::find($id);

return view('resumes.edit',compact('resumes','id'));
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
        $resumes = new Resume();

        $request->validate([

            'year' => 'required|numeric',

            'company' => 'required',
            'content' => 'required',

        ]);

        $resumes = Resume::find($id);
        $resumes->Year = $request->get('year');

        $resumes->Company = $request->get('company');
        $resumes->Content = $request->get('content');


        $resumes->save();

        return redirect('resumes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Resume::find($id)->delete();

        return redirect('resumes')->with('success', 'Resume has been

deleted');
    }
}
