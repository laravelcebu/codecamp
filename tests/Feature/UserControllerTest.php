<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    /**
     * @test
     */
    public function can_list_users()
    {
        // All users
        $users = factory(User::class, 10)->create();

        // View users
        $this->get('users');
        dd($this);
    }
}
