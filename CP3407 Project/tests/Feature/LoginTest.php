<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /** @test */
    public function a_user_can_login_with_correct_credentials()
    {
        $user = User::factory()->create([
            'email' => 'kimroselle83@gmail.com',
            'password' => Hash::make('kim1234##'),
        ]);

        $response = $this->post('/login', [
            'email' => 'kimroselle83@gmail.com',
            'password' => 'kim1234##',
        ]);

        $this->assertAuthenticatedAs($user);
        $response->assertStatus(302);
        $response->assertRedirect('/');
    }
}
