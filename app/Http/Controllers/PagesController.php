<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleve;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $eleves=Eleve::orderBy('id','desc')->get();
       $eleves=Eleve::orderBy('id','desc')->paginate('3');

        return view('index',['eleves'=>$eleves]);
        
    }

    public function ajouterLivre(){
        

            return view('addEleve');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postajouterEleve(Request $request)
    {
        $data=$request->validate([
    'FirstName'=>'required |min:5',
    'LastName'=>'required',
    'phone'=>'required',
    'niveau'=>'required',

    'etablissement'=>'required'
    ]);


   Eleve::create($data);
    
    return back()->with('success','votre eleve a été ajouté');
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
    public function supprimerEleve($id){
        
        $eleve_a_supprimer=Eleve::find($id);
        $eleve_a_supprimer->delete();
        return back()->with('success','votre eleve a été supprimer');

    }
}
