<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * @dataProvider redirections 
     */
    public function test_redirect_expections($status, $redirectTo) : void
    {
        $user = User::factory()->createOne();
        $response = $this->actingAs($user)->withSession(['banned' => false])->get($redirectTo);
        $response->assertStatus($status);
    }

    public function redirections() : array
    {
        return $redirection = [
            [200, '/dashboard'],
            [302, '/login'],
            [302, '/register']
        ];
    }
}
