<?php

namespace App\Http\Controllers;

use App\Cats;
use Illuminate\Http\Request;

class CatsController extends Controller
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
            'nom' => 'required',
            'couleur' => 'required',
            'photo' => 'required'
        ]);

        $cats = new Cats;
        $cats->nom = $request->nom;
        $cats->couleur = $request->couleur;
        $cats->photo = $request->photo;
        $cats->description = $request->description;
        $cats->save();
        return redirect()->route('listecats');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function show(Cats $cats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function edit(Cats $cat)
    {
        return view('site/edit',['cats'=> $cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cats $cats)
    {
        $cats->nom = $request->nom;
        $cats->couleur = $request->couleur;
        $cats->photo = $request->photo;
        $cats->description = $request->description;
        $cats->save();
        return redirect()->route('listecats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cats $cats)
    {
        $cats->delete();
        return redirect()->route('listecats');
    }

    public function showCats()
    {
        $cats = Cats::all();
        return view('site/cats',['cats'=> $cats]);
    }
    
    public function showOneCat($id)
    {
        $Onecat = Cats::find($id);
        return view('site/oneCats',['Onecat'=> $Onecat]);
    }

    public function search(Request $request){
        $search = $request->get('search');
        $cats = Cats::where('nom', 'like', '%'.$search.'%')->get();
        return view('site/cats', ['cats' => $cats]);
    }

    public function stats(){
        return view('site/stats');
    }
}
