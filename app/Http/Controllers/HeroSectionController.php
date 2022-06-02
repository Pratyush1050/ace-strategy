<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroSection =  HeroSection::first();
        return view('admin.hero_section', compact('heroSection'));
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
            'title'          => 'required|string',
            'sub_title'      => 'required|string',
            'contract_title' => 'required|string'
        ]);

        $heroSections = HeroSection::get();

        if(count($heroSections) == 1)
        {
            $heroSection = HeroSection::first();
            $heroSection->title = $request->title;
            $heroSection->sub_title = $request->sub_title;
            $heroSection->contract_title = $request->contract_title;
            $heroSection->save();

            return back()->with('success', 'Hero Section Content Updated Successfully.');

        }else{

            $heroSection = new HeroSection();
            $heroSection->title = $request->title;
            $heroSection->sub_title = $request->sub_title;
            $heroSection->contract_title = $request->contract_title;
            $heroSection->save();

            return back()->with('success', 'Hero Section Content Added Successfully.');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
