<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function login(Request $req)
    {
        $form = Validator::make($req->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if ($form->fails()) {
            return \response()->json($form->errors(), 422);
        }

        $user = User::where('email', $req->email)->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return \response()->json(['message' => 'Usuário ou senha inválidos'], 401);
        }

        return \response()->json([
            'message' => 'Logado com sucesso',
            'data' => $user
        ], 200);
    }

    public function register(Request $req)
    {
        $form = Validator::make($req->all(), [
            'name' => 'required|min:3|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed|string',
            'password_confirmation' => 'required|min:8|string'
        ]);

        if ($form->fails()) {
            return \response()->json($form->errors(), 422);
        }

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);

        if (!$user) {
            return \response()->json(['message' => 'Erro ao criar usuário'], 500);
        }

        return \response()->json(['message' => '', 201]);
    }

    public function update(Request $req)
    {
        $form = Validator::make($req->all(), [
            'name' => 'string|required|min:3',
            'email' => 'string|email|required|unique:users,email,' . $req->user()->id,
        ]);

        if ($form->fails()) {
            return \response()->json($form->errors(), 422);
        }

        $user = User::update([
            'name' => $req->name,
            'email' => $req->email
        ]);

        if (!$user) {
            return \response()->json(['message' => 'Erro ao atualizar os dados do usuário'], 500);
        }

        return \response()->json(['message' => '', 201]);
    }

    public function show(int $id)
    {
        $user = User::findOrFail($id);

        return \response()->json([
            'message' => 'Usuário encontrado',
            'data' => $user
        ], 200);
    }
}
