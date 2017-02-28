<?php

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function a_user_has_a_name()
    {
        $user = factory(User::class, 1)->create(['name' => 'Joe']);

        $this->assertEquals('Joe', $user->name);
    }

    /** @test */
    function a_user_is_not_an_admin()
    {
        $user = factory(User::class, 1)->create();

        $this->assertFalse($user->is_admin);
    }

    /** @test */
    function an_admin_user_is_an_admin()
    {
        $user = factory(User::class, 1)->create(['is_admin' => true]);

        $this->assertTrue($user->is_admin);
    }
}