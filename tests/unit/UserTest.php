<?php

namespace tests\unit;


use App\User;


class UserTest extends \PHPUnit_Framework_TestCase
{
    /** @test  */
    function a_user_has_a_name()
    {
//        $user = new User(['name' => 'Joe']);
        $user = new User();
        $user->name = 'Joe';

        $this->assertEquals('Joe', $user->name());
    }
}
