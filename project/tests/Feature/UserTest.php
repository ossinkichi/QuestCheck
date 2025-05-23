<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_register(): void
    {
        $response = $this->postJson('/api/user/register', [
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
            'password' => 'passwordHash',
            'password_confirmation' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(201)->assertJson([]);
    }

    public function test_login(): void
    {
        $response = $this->postJson('/api/user/login', [
            'email' => 'example@gmail.com',
            'password' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        \dd($response->json());

        $response->assertStatus(200)->assertJson(['message' => 'Logado com sucesso!', 'data' => [
            'id' => 1,
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com'
        ]]);
    }

    public function test_update(): void
    {
        $response = $this->postJson('/api/user/login', [
            'email' => 'example@gmail.com',
            'password' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(201)->assertJson([]);
    }

    public function test_show(): void
    {
        $response = $this->postJson('/api/user/login', [
            'email' => 'example@gmail.com',
            'password' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(200)->assertJson(
            [
                'message' => 'Usúario encontrado',
                'user' => [
                    'id' => 1,
                    'name' => 'Jhon Doe',
                    'email' => 'example@gmail.com',
                    'created_at' => '2023-10-01T00:00:00.000000Z'
                ]
            ]
        );
    }
}
