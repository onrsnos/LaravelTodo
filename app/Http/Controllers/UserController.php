<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

 
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        
        return view('users.index');
        
    }

    public function index_data(){


        $users = User::all();

        return DataTables($users)
            ->addColumn('action', function($row){

                return view('users.aksiyonlar', compact('row'));
                return $row->id;
            })
            ->make(true);


    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('users.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        $users = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

            
        ]);
        

        return redirect('/users');

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

        $user = User::where('id', $id)->first();

        

        return view('users.edit', compact('user'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update_resource(Request $request, string $id)
    {
        //
    }

    public function update(Request $request){

        // User::where('id', $request->id)->update(function($data){
        //     return [
        //         'name' => $request->name,
        //         'email' => $request->email
        //     ];
        // });

        $array = [];
        $array['name'] = $request->name;
        $array['email'] = $request->email;
        if($request->password!=""){
            $array['password'] = Hash::make($request->password);
            // Crypt::encryptString($request->password);
             

        }
        
        User::where('id', $request->id)->update($array);

 
        return redirect('/users');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        User::where('id', $id)->delete();

        return redirect('/users');


    }
}
