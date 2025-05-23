<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function login(Request $req)
    {
        $form = Validator::make($req->all(), [
            'email' => 'required|email|string',
            'password' => 'required|min:8'
        ]);

        if ($form->fails()) {
            return \response()->json($form->errors(), 422);
        }

        $user = User::where('email', $req->email)->first();

        \dd($user);

        if (!$user || !Hash::check($req->password, $user->password)) {
            return \response()->json(['message' => 'Email ou senha inválidos'], 401);
        }

        return \response()->json([
            'message' => 'Logado com sucesso!',
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
            ]
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

        return \response()->json([], 201);
    }

    public function update(Request $req)
    {
        $form = Validator::make($req->all(), [
            'id' => 'integer|required|exists:users,id',
            'name' => 'string|required|min:3',
            'email' => [
                'required',
                'string',
                'email',
                Rule::unique('users', 'email')->ignore($req->id),
            ]
        ]);

        if ($form->fails()) {
            return \response()->json($form->errors(), 422);
        }

        $user = User::where('id', $req->id)->update([
            'name' => $req->name,
            'email' => $req->email
        ]);

        if (!$user) {
            return \response()->json(['message' => 'Erro ao atualizar os dados do usuário'], 500);
        }

        return \response()->json([], 201);
    }

    public function show(int $id)
    {
        $user = User::findOrFail($id);

        return \response()->json([
            'message' => 'Usúario encontrado!',
            'data' => new UserResource($user),
        ], 200);
    }
}
