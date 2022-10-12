<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
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
        $this->validate($request, [
            'email' => 'email|unique:users,email,'.$id,
            'password' => 'same:password_confirmation',
            'profile_photo_path' => 'file|max:1000|mimes:jpg,png',
        ]);

        if($request->filled('name') || $request->filled('email')){
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if($request->hasFile('profile_photo_path')){
                $path = 'images/profile/';
                $files = $request->file('profile_photo_path');
                $prefix = date('Ymdhis');
                $by = auth()->user()->id;
                $extension = $files->extension();
                $filename = $path.$prefix.'-'. $by.'.'.$extension;
                $files->move(public_path('images/profile/'),$filename);  
    
                User::find($id)->update([
                    'profile_photo_path' => $filename
                ]);
            } 
        }

        if($request->filled('password')){
            User::find($id)->update([
                'password' => Hash::make($request->password)
            ]);
        }

        return redirect(route('profile.index'))->with('status', 'berhasil');
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
