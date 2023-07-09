<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // list all users
        // eloquent - fetch data from database
        $users = User::all();
        // dd($users); // helper
        return view('admin.user_index', compact('users')); // compact - pass users to blade

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = new User;
        return view('admin.user_form', compact('user'));
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
        // dd($request);
        $this->validate($request,[
            'name' => 'required',
            'staff_id' => 'nullable|min:5', // alpha|numeric
            'email' => 'required|email|unique:users,email',
            'department' => 'nullable',
            'role' => 'required|in:user,admin',
            'password' => 'required|min:8|confirmed',
        ]);

        // dd('success');
        // dd($request);

        $user = new User;

        $user->fill($request->except('password')); // set in User model
        $user->role = $request['role'];
        $user->password = Hash::make($request['password']);

        
        // $user->name = $request['name'];
        // $user->email = $request['email'];
        // $user->department = $request['department'];
        // $user->role = $request['role'];
        // $user->password = Hash::make($request['password']);

        $user->save(); // save in database

        return redirect()->route('app.admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) // ($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)    // ($id) 404 laravel will handle
    {
        //
        // dd($id); 
        // $user = User::find($id); // laravel will not handle 404
        return view('admin.user_form', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)// $id)
    {
        //
        // $user = User::find($id);
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
