<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $users = User::all();
        return view('users.list', compact('users', 'roles'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(CreateRequest $request)
    {
        $users = new User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $users->image = $path;
        }

        $users->phone = $request->input('phone');
        $users->address = $request->input('address');
        $users->role_id = $request->input('role_id');
        $users->save();
        Session::flash('success', 'Create Complete');
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        if ($request->hasFile('image')) {
            $currentImg = $user->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }

            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $user->image = $path;
        }
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->role_id = $request->input('role_id');
        $user->save();
        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $image = $user->image;
        if ($image){
            Storage::delete('/public' . $image);
        }
        $user->delete();
        return redirect()->route('users.index');
    }
}
