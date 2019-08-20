<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ExampleTest extends TestCase
{
    /**
    * A basic test example.
    *
    * @return void
    */
    public function test_all_users_have_a_role()
    {
        foreach (User::all() as $user)
            $this->assertTrue($user->role->count() > 0);
    }
}
