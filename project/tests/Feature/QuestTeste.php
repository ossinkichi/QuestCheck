<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuestTeste extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_index(): void
    {
        $response = $this->get('/quests/1');

        $response->assertStatus(200)->assertJson(['date' => [
            'id' => 1,
            'title' => 'Titulo da tarefa',
            'description' => 'Isso é um teste!',
            'created_at' => '',
            'points' => 0,
        ]]);
    }

    /**
     * A basic feature test example.
     */
    public function test_create(): void
    {
        $response = $this->post('/quest/create', [
            'title' => 'Titulo da tarefa',
            'description' => 'Isso é um teste!',
            'user' => 1,
        ]);

        $response->assertStatus(201)->assertJson([]);
    }

    public function test_show(): void
    {
        $response = $this->get('/quest/show/1');

        $response->assertStatus(200)->assertJson(['message' => '', 'date' => array()]);
    }

    public function test_update(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_check(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
