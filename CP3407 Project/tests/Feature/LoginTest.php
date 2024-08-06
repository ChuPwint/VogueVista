<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function a_user_can_login_with_correct_credentials()
    {
        $user = User::where("email", "choopwintchal@gmail.com")->first();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'chOO1234##',
        ]);

        $this->assertAuthenticatedAs($user);
        $response->assertStatus(302);
        $response->assertRedirect('/');
    }


}
