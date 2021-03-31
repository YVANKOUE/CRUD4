<?php

namespace App\Http\Controllers\password;

use App\User;
use App\faculty;
use Illuminate\Http\Request;
use App\Mail\reset_passwordMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filiéres = faculty::all();
        return view('admin.universités.create')->with('filiéres',$filiéres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('auth.passwords.reset');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $user = User::where('email', $request->email)->first();
        if($user->email = ""){           
            return view('auth.passwords.email')->with('status' , 'email'.$user.'ne correspond pas a nos enregistrement');
        }else{
            Mail::to($request->email)->send(new reset_passwordMail());
            return view('auth.passwords.reset')->with(
                'status' , 'Le mail a été envoyé avec success');
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
