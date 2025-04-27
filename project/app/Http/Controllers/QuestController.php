<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Quest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class QuestController extends Controller
{

    public function index(int $id)
    {
        $quests = Quest::where('user_id', $id)->get();

        if (!$quests) {
            return \response()->json(['message' => 'Nenhuma tarefa encontrada!'], 404);
        }

        return \response()->json([
            'message' => '',
            'data' => $quests
        ], 200);
    }

    public function create(Request $req)
    {
        $form = Validator::make($req->all(), [
            'user' => 'integer|required|exists:users,id',
            'title' => 'string|required|min:5',
            'description' => 'string|required',
            'points' => 'integer|optional'
        ]);

        if ($form->fails()) {
            return \response()->json($form->errors(), 422);
        }

        $quest = Quest::create([
            'title' => $req->title,
            'description' => $req->description,
            'user_id' => $req->user
        ]);

        if (!$quest) {
            return \response()->json(['message' => 'Não foi possivel criar a tarefa'], 500);
        }

        return \response()->json(['message' => ''], 201);
    }

    public function update(Request $req)
    {
        $form = Validator::make($req->all(), [
            'id' => 'integer|required|exists:quests,id',
            'title' => 'string|required|min:5',
            'description' => 'string|required',
            'points' => 'integer|optional'
        ]);

        if ($form->fails()) {
            return \response()->json($form->errors(), 422);
        }

        $quest = Quest::where('id', $req->id)->update([
            'title' => $req->title,
            'description' => $req->description,
            'points' => $req->points
        ]);

        if (!$quest) {
            return \response()->json(['message' => 'Não foi possivel atualizar os dados da tarefa'], 422);
        }

        return \response()->json(['message' => '', 201]);
    }

    public function show(int $id)
    {
        $quest = Quest::findOrFail($id);

        return \response()->json(['message' => '', 'data' => $quest], 200);
    }

    public function check(int $id)
    {
        $quest = Quest::where('id', $id)->update([
            'completed' => true,
            'completed_at' => \date('Y/m/d H:i:s')
        ]);

        if (!$quest) {
            return \response()->json(['message' => 'Não foi possivel concluir a tarefa'], 422);
        }

        return \response()->json(['message' => ''], 201);
    }
}
