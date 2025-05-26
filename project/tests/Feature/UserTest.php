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
        $this->postJson('api/user/register', [
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
            'password' => 'passwordHash',
            'password_confirmation' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response = $this->postJson('api/user/login', [
            'email' => 'example@gmail.com',
            'password' =>  'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(200)->assertJson(['message' => 'Logado com sucesso!', 'data' => [
            'id' => 1,
            'name' => 'Jhon Doe',
        ]]);
    }

    public function test_show(): void
    {
        $this->postJson('api/user/register', [
            'name' => 'Kristopher Tillman',
            'email' => 'Justice18@yahoo.com',
            'password' => 'passwordHash',
            'password_confirmation' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response = $this->get('/api/user/show/1');

        $response->assertStatus(200)->assertJson(
            [
                'message' => 'Usúario encontrado!',
                'data' => [
                    "id" => 1,
                    "name" => "Kristopher Tillman",
                    "email" => "Justice18@yahoo.com",
                    "rank" => "iron",
                    "points" => 0,
                    "avatar" => "default.png",
                    "email_verified_at" => null,
                    "remember_token" => null,
                    "updated_at" => "26/05/2025",
                    "created_at" => "26/05/2025",
                ]
            ]
        );
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

        $response = $this->putJson('/api/user/update', [
            'id' => 1,
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
            'password' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(201)->assertJson([]);
    }
}
