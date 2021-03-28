<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Validation;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('index')->with('users',$users);
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
    public function store( Validation $request )
    {
        $users = new User();
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->password = $request->get('password');
        $users->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $user = User::find( $id );

        if ( !$user ) 
        {
            return redirect()->route('index');
        }

        return view('editar', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
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
    public function update( Validation $request, $id)
    {
        if ( !$user = User::find( $id ) ) 
        {
            return redirect()->back();
        }

        $data = $request->all();
        $user->update( $data );

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        if ( !$user = User::find( $id ) ) 
        {
            return redirect()->back();
        }

        $user->delete();

        return redirect()->route('index');
    }

    public function search( Request $request )
    {
        $filters = $request->except('_token');

        $users = User::where('name', 'LIKE', "%{$request->search}%")->orWhere('email', 'LIKE', "%{$request->search}%")->paginate();

        return view('index', compact('users', 'filters'));
    }
}
