<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_register(): void
    {
        $response = $this->post('/user/register', [
            'name' => 'Jhon Doe',
            'email' => 'example@gmail.com',
            'password' => 'passwordHash',
            'password_confirmation' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(201)->assertJson(['message' => '']);
    }

    public function test_login(): void
    {
        $response = $this->post('/user/login', [
            'email' => 'example@gmail.com',
            'password' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(200)->assertJson(['message' => '', 'data' => array()]);
    }

    public function test_update(): void
    {
        $response = $this->post('/user/login', [
            'email' => 'example@gmail.com',
            'password' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(200)->assertJson(['message' => '', 'user' => array()]);
    }

    public function test_show(): void
    {
        $response = $this->post('/user/login', [
            'email' => 'example@gmail.com',
            'password' => 'passwordHash'
        ], [
            'Content-Type' => 'application/json'
        ]);

        $response->assertStatus(200)->assertJson(['message' => '', 'user' => array()]);
    }
}
