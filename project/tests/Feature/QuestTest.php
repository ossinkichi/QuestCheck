<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuestTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_index(): void
    {
        $this->postJson('api/user/register', [
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
            'password' => 'passwordHash',
            'password_confirmation' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $this->postJson('api/quest/create', [
            'title' => 'Titulo da tarefa',
            'description' => 'Isso é um teste!',
            'user' => 1,
        ]);

        $response = $this->get('api/quest/1');

        $response->assertStatus(200)->assertJson(['message' => 'Tarefas encontradas!', 'data' =>
        [
            [
                'id' => 1,
                'title' => 'Titulo da tarefa',
                'description' => 'Isso é um teste!',
                'points' => 0,
                'completed' => false,
                'completed_at' => null,
                'failed_at' => null,
                'updated_at' => '26/05/2025',
                'created_at' => '26/05/2025',
            ]
        ]]);
    }

    public function test_create(): void
    {
        $this->postJson('api/user/register', [
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
            'password' => 'passwordHash',
            'password_confirmation' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response = $this->postJson('api/quest/create', [
            'title' => 'Titulo da tarefa',
            'description' => 'Isso é um teste!',
            'user' => 1,
        ]);

        $response->assertStatus(201)->assertJson([]);
    }

    public function test_show(): void
    {
        $this->postJson('api/user/register', [
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
            'password' => 'passwordHash',
            'password_confirmation' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $this->postJson('api/quest/create', [
            'title' => 'Titulo da tarefa',
            'description' => 'Isso é um teste!',
            'user' => 1,
        ]);

        $response = $this->get('api/quest/show/1/1');

        $response->assertStatus(200)->assertJson(['message' => 'Tarefa encontrada!', 'data' => [
            'id' => 1,
            'title' => 'Titulo da tarefa',
            'description' => 'Isso é um teste!',
            'points' => 0,
            'completed' => false,
            'completed_at' => null,
            'failed_at' => NULL,
            'updated_at' => '26/05/2025',
            'created_at' => '26/05/2025',
        ]]);
    }

    public function test_update(): void
    {
        $this->postJson('api/user/register', [
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
            'password' => 'passwordHash',
            'password_confirmation' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $this->postJson('api/quest/create', [
            'title' => 'Titulo da tarefa',
            'description' => 'Isso é um teste!',
            'user' => 1,
        ]);

        $response = $this->putJson('/api/quest/update', [
            'title' => 'Titulo da tarefa atualizado',
            'description' => 'Isso é um teste atualizado!',
            'user' => 1,
            'quest' => 1,
        ]);

        $response->assertStatus(201)->assertJson([]);
    }

    public function test_check(): void
    {

        $this->postJson('api/user/register', [
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
            'password' => 'passwordHash',
            'password_confirmation' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $this->postJson('api/quest/create', [
            'title' => 'Titulo da tarefa',
            'description' => 'Isso é um teste!',
            'user' => 1,
        ]);

        $response = $this->patch('api/quest/check/1/1');

        $response->assertStatus(201)->assertJson([]);
    }

    public function test_failed(): void
    {

        $this->postJson('api/user/register', [
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
            'password' => 'passwordHash',
            'password_confirmation' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $this->postJson('api/quest/create', [
            'title' => 'Titulo da tarefa',
            'description' => 'Isso é um teste!',
            'user' => 1,
        ]);

        $response = $this->patch('api/quest/failed/1/1');

        $response->assertStatus(201)->assertJson([]);
    }
}
