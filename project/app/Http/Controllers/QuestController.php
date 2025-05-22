<?php

namespace App\Http\Controllers;

use DateTime;
use LDAP\Result;
use App\Models\Quest;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class QuestController extends Controller
{

    public function index(int $id)
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
            'title' => $req->title,
            'description' => $req->description,
            'user_id' => $req->user,
            'points' => $req->points,
        ]);

        return $quest->whenEmpty(function () {
            return \response()->json(['message' => 'Não foi possivel criar a tarefa'], 500);
        }, function () {
            return \response()->json(['message' => ''], 201);
        });
    }

    public function update(Request $req): JsonResponse
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

        return $quest->whenEmpty(function () {
            return \response()->json(['message' => 'Não foi possivel atualizar os dados da tarefa'], 422);
        }, function () {
            return \response()->json([], 201);
        });
    }

    public function show(int $id): JsonResponse
    {
        $quest = Quest::findOrFail($id);

        return \response()->json(['message' => 'Tarefa encontrada!', 'data' => new QuestResource($quest)], 200);
    }

    public function check(int $id): JsonResponse
    {
        $quest = Quest::where('id', $id)->update([
            'completed' => true,
            'completed_at' => \date('Y/m/d H:i:s')
        ]);

        return $quest->whenEmpty(function () {
            return \response()->json(['message' => 'Não foi possivel concluir a tarefa'], 422);
        }, function () {
            return \response()->json([], 201);
        });
    }

    public function failed(int $id): JsonResponse
    {
        $quest = Quest::where('id', $id)->update([
            'completed' => false,
            'completed_at' => null
        ]);

        return $quest->whenEmpty(function () {
            return \response()->json(['message' => 'Não foi possivel falhar na tarefa']);
        }, function () {
            return \response()->json([], 201);
        });
    }
}
