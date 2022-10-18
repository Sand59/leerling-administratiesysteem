<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Resultaat;
use Illuminate\Http\Request;

class ResultaatController extends Controller
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
    public function create(int $student_id)
    {
       $student = Student::findOrFail($student_id);
       return view('resultaats.create', ['student_id'=>$student_id]);
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
            'resultaat' => 'required',
            'vak' => 'required',
            'cursusjaar' => 'required',
            'student_id' => 'required'
        ]);
    
        Resultaat::create($request->all());
    
        return redirect()->route('students.show', $request->student_id);
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resultaat  $resultaat
     * @return \Illuminate\Http\Response
     */
    public function show(Resultaat $resultaat)
    {
      $resultaat = Resultaat::find($resultaat->id);
      return view('resultaats.show', compact('resultaat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resultaat  $resultaat
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultaat $resultaat)
    {
        $resultaat = Resultaat::find($resultaat->id);
        return view('resultaats.edit', compact('resultaat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resultaat  $resultaat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultaat $resultaat)
    {
        $request->validate([
            'resultaat' => 'required',
            'vak' => 'required',
            'cursusjaar' => 'required',
            'student_id' => 'required'
        ]);

        $resultaat->update($request->all());

        return redirect()->route('students.show', $request->student_id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resultaat  $resultaat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultaat $resultaat)
    {
      $resultaat->delete();
      return redirect()->route('students.show', $resultaat->student_id);
    }
}
