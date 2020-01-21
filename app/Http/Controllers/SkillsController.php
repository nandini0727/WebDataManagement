<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $primaryKey = 'SkillID';
    public function index()
    {
        $skills = Skills::all()->toArray();

        return view('skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
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

            'skillname' => 'required',

            'skillpercent' => 'required|numeric',

        ]);

        $skills = new Skills();

        $skills->SkillName = $request->get('skillname');

        $skills->SkillPercent = $request->get('skillpercent');

        $skills->SkillType = $request->get('skilltype');

        $skills->save();

        return redirect('skills')->with('success', 'Skill has been added');

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

        $skills = Skills::where('SkillID', $id)->first();

        //print($skills);

        return view('skills.edit', compact('skills', 'id'));
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
        $skills = new Skills();

        $request->validate([

            'skillname' => 'required',

            'skillpercent' => 'required|numeric',

        ]);

        $skills = Skills::where('SkillID', $id)->first();

        // $skills->update([
        //     'SkillName' => $request->get('skillname'),
        //     'SkillPercent' => $request->get('skillpercent'),
        //     'SkillType' => $request->get('skilltype')
        // ]);

        // $skills->SkillName=$request->get('skillname');

        // $skills->SkillPercent=$request->get('skillpercent');

        // $skills->SkillType=$request->get('skilltype');

        $skills = Skills::where('SkillID', $id)->update([
            'SkillName' => $request->get('skillname'),
            'SkillPercent' => $request->get('skillpercent'),
            'SkillType' => $request->get('skilltype'),
        ]);

        #$skills->save();

        return redirect('skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skills::where('SkillID', $id)->delete();

        return redirect('skills')->with('success', 'Skill has been

deleted');
    }
}
