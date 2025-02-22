<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function index() {
        $users= User::all();
        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function create() {
        return view('users.create');
    }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }

    public function store(Request $request) {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        User::create($input);

        return redirect()
            ->route('users.index')
            ->with('status', 'Usuário adicionado com sucesso !!!');
    }

    public function update(User $user, Request $request) {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'exclude_if:password,null|min:8'
        ]);

        $user->fill($input);
        $user->save();

        return redirect()
            ->route('users.index')
            ->with('status', 'Usuário alterado com sucesso !!!');
    }

    public function destroy(User $user) {
        $user->delete();
        return back()
            ->with('status', 'Usuário apagado com sucesso !!!');

    }
}
