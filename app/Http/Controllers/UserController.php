<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $items  = User::orderBy('name', 'ASC')->get();
        return view('pages.user.index', [
            'title' => 'User Data',
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.user.create', [
            'title' => 'User Create'
        ]);
    }

    public function store()
    {
        request()->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required', 'min:6'],
            'password_confirmation' => ['required', 'same:password'],
        ]);

        try {
            $data = request()->only('name', 'email');
            $data['password'] = bcrypt(request('password'));
            User::create($data);

            return redirect()->route('users.index')->with('success', 'User created successfully');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('users.index')->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);

        return view('pages.user.edit', [
            'title' => 'User Edit',
            'item' => $item
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users,email,' . $id],
            'password' => ['nullable', 'min:6'],
            'password_confirmation' => ['nullable', 'same:password'],
        ]);

        try {
            $item = User::findOrFail($id);
            $data = request()->only('name', 'email');
            if (request()->password) {
                $data['password'] = bcrypt(request()->password);
            }
            $item->update($data);
            return redirect()->route('users.index')->with('success', 'User updated successfully');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('users.index')->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        try {
            $item->delete();
            return redirect()->route('users.index')->with('success', 'User deleted successfully');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('users.index')->with('error', $th->getMessage());
        }
    }
}
