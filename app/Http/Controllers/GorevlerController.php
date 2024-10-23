<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Gorevler;
use DataTables;


class GorevlerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('gorevler');

    }

    public function index_data(){

        $gorevler = Gorevler::all();

        return DataTables($gorevler)
            ->addColumn('action', function($gorev){

                return view('aksiyonlar', compact('gorev'));
                
            })
            ->make(true);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $gorevler = Gorevler::create([

            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
            
        ]);
        

        return redirect('/gorevler');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $gorev = Gorevler::where('id', $id)->first();


        return view('edit', compact('gorev'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update_resource(Request $request, string $id)
    {
        //
    }

    public function update(Request $request){

        Gorevler::where('id', $request->id)->update([

            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,


        ]);

        return redirect('/gorevler');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Gorevler::where('id', $id)->delete();

        return redirect('/gorevler');


    }
}
