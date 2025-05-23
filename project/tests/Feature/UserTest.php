<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_register(): void
    {
        $response = $this->postJson('api/user/register', [
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
        $response = $this->postJson('api/user/login', [
            'email' => 'Justice18@yahoo.com',
            'password' =>  'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(200)->assertJson(['message' => 'Logado com sucesso!', 'data' => [
            'id' => 1,
            'name' => 'Kristopher Tillman',
        ]]);
    }

    public function test_show(): void
    {
        $response = $this->get('/api/user/show/1');

        $response->assertStatus(200)->assertJson(
            [
                'message' => 'Usúario encontrado',
                'user' => [
                    "id" => 1,
                    "name" => "Kristopher Tillman",
                    "email" => "Justice18@yahoo.com",
                    "points" => 0,
                    "rank" => "iron",
                    "avatar" => "default.png",
                    "email_verified_at" => null,
                    "remember_token" => null,
                    "created_at" => "2025-05-23T15:54:09.000000Z",
                    "updated_at" => "2025-05-23T15:54:09.000000Z"
                ]
            ]
        );
    }

    public function test_update(): void
    {
        $response = $this->putJson('/api/user/update', [
            'id' => 1,
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(201)->assertJson([]);
    }
}
