<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("admin.pages.users.index", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'address' => 'required',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password',
            'role' => 'required',
            'status' => 'required',
        ]);
        if ($request->password === $request->confirmPassword) {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'status' => $request->status,
            ]);
            if ($request->has('image')) {
                $user->addMediaFromRequest('image')->toMediaCollection('images');
            }
            return redirect()->back();
        }
        return redirect()->back()->with("confirmError", "passwrod dosn't match");
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
        $user = User::find($id);
        // return $user;
        return view('admin.pages.users.edit', compact('user'));
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
            'name' => 'min:2',
            'username' => 'unique:users,username',
            'email' => 'email|unique:users,email',
            'address' => 'min:4',
            'password' => 'min:8',
            'confirmPassword' => 'same:password',
        ]);

        if ($request->password === $request->confirmPassword) {

            $user = User::find($id);

            if ($request->has('image')) {

                $old = $user->getFirstMedia('images');
                if ($old) {
                    $old->delete();
                }
                $user->addMediaFromRequest('image')->toMediaCollection('images');
            }

            if ($request->has('password')) {
                $user->update([
                    'password' => Hash::make($request->password),
                ]);
            }

            $user->update($request->except('password'));
        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id; die();
        $user = User::find($id);
        $old = $user->getFirstMedia('images');
        if ($old) {
            $old->delete();
        }
        $user->delete();
        return redirect()->back();
    }
}
