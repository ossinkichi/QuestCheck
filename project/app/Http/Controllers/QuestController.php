<?php

namespace App\Http\Controllers;

use App\Models\Quest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestResource;
use Illuminate\Support\Facades\Validator;

class QuestController extends Controller
{

    public function index(int $id): JsonResponse
    {
        $quests = Quest::where('user_id', $id)->get();

        return $quests->whenEmpty(function () {
            return \response()->json(['message' => 'Nenhuma tarefa encontrada!'], 404);
        }, function ($quests) {
            return \response()->json([
                'message' => 'Tarefas encontradas!',
                'data' => \array_map(fn($quest) => new QuestResource($quest), $quests->all())
            ], 200);
        });
    }

    public function create(Request $req): JsonResponse
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
            'user_id' => $req->user,
            'title' => $req->title,
            'description' => $req->description,
            'points' => $req->points,
        ]);

        if (!$quest) {
            return \response()->json(['message' => 'Não foi possivel criar a tarefa'], 422);
        }

        return \response()->json([], 201);
    }

    public function update(Request $req): JsonResponse
    {
        $form = Validator::make($req->all(), [
            'quest' => 'integer|required|exists:quests,id',
            'user' => 'integer|required|exists:quests,user_id',
            'title' => 'string|required|min:5',
            'description' => 'string|required',
            'points' => 'integer|optional'
        ]);

        if ($form->fails()) {
            return \response()->json($form->errors(), 422);
        }

        $payload = Quest::where('user_id', $req->user)->where('id', $req->quest)->update([
            'title' => $req->title,
            'description' => $req->description,
            'points' => $req->points ?? 0,
        ]);

        if (!$payload) {
            return \response()->json(['message' => 'Não foi possivel atualizar os dados da tarefa'], 401);
        }
        return \response()->json([], 201);
    }

    public function show(int $user, int $quest): JsonResponse
    {
        $payload = Quest::where('user_id', $user)->findOrFail($quest);

        return \response()->json(['message' => 'Tarefa encontrada!', 'data' => new QuestResource($payload)], 200);
    }

    public function check(int $user, int $quest): JsonResponse
    {
        $payload = Quest::where('id', $quest)->where('user_id', $user)->where('failed_at', null)->update([
            'completed' => true,
            'completed_at' => \date('Y/m/d H:i:s')
        ]);

        if (!$payload) {
            return \response()->json(['message' => 'Não foi possivel concluir a tarefa'], 422);
        }
        return \response()->json([], 201);
    }

    public function failed(int $user, int $quest): JsonResponse
    {
        $payload = Quest::where('id', $quest)->where('user_id', $user)->where('completed_at', null)->update([
            'completed' => false,
            'failed_at' => \date('Y/m/d H:i:s')
        ]);

        if (!$payload) {
            return \response()->json(['message' => 'Não foi possivel falhar na tarefa'], 422);
        }
        return \response()->json([], 201);
    }
}
