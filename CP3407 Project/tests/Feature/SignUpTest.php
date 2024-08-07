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
            'name' => 'Test User',
            'email' => 'testuser@gmail.com',
            'password' => 'testUser1234##',
            'password_confirmation' => 'testUser1234##',
            'phone' => '12345678'
        ]);

        $response->assertStatus(302); // Check for redirection
        $response->assertRedirect('/finishSignUp'); // Assuming you redirect to '/home' after registration

        // Check if the user is authenticated
        $this->assertAuthenticated();
        
        // Check if the user is in the database
        $this->assertDatabaseHas('users', [
            'email' => 'testuser@gmail.com'
        ]);
    }
}
