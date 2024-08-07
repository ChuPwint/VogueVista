<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SignUpTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_register()
    {
        $response = $this->post('/signup', [
            'name' => 'Test User 3',
            'email' => 'testuser3@gmail.com',
            'password' => 'testUser_1234##',
            'password_confirmation' => 'testUser_1234##',
            'phone' => '12345678'
        ]);
        
        // Check if the user is in the database
        $this->assertDatabaseHas('users', [
            'email' => 'testuser3@gmail.com'
        ]);
    }
}
