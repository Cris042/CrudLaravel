<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Validation;
use App\Http\Requests\ValidationEditar;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
 
    public function index()
    {
        $users = User::all();
        return view('index')->with('users',$users);
    }

    public function create()
    {
        //
    }

    public function store( Validation $request )
    {
        $users = new User();
        $users->name = $request->get('name');  
        $users->email = $request->get('email');
        $users->password = Hash::make( $request->get('password') ); 
        $users->save();
        return redirect()->route('index');
       
    }

    public function show( $id )
    {
        $user = User::find( $id );

        if ( !$user ) 
        {
            return redirect()->route('index');
        }

        return view('editar', compact('user'));
    }

    public function edit( $id )
    {
        //
    }

    public function update( ValidationEditar $request, $id)
    {
        if ( !$user = User::find( $id ) ) 
        {
            return redirect()->back();
        }

        if ( !empty( $request->password ) ) 
        {
            $request->merge( ['password' => Hash::make($request['password'] ) ] );
        }
        else
        {
            $userUniq = User::where('id', $id )->get();
            $password = $userUniq[ 0 ] -> password;
            $request->merge( ['password' => $password ] );
        }

        if( $request->get('emailAtual') != $request->get('email') )
        {
            if ( User::where('email', $request->get('email') )->exists() ) 
                dd("E-mail existente");
            else
            {
                $data = $request->all();
                $user->update( $data );
            }
        }
        else
        {
            $data = $request->all();
            $user->update( $data );
        }

        return redirect()->route('index');
    }

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
