<?php

use App\Business;
use App\Employee;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class BusinessTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function a_business_has_a_slug()
    {
        $business = factory(Business::class)->create(['name' => 'Dan\'s 12 Amazing Donkeys & Donuts']);

        $this->assertEquals('dans-12-amazing-donkeys-donuts', $business->slug());
    }

    function test_a_null_is_not_an_employee_in_a_business_with_no_employees()
    {
        $nullUser = null;
        $noEmployeesBusiness = factory(Business::class)->create();

        $this->assertFalse($noEmployeesBusiness->hasEmployee($nullUser));
    }

    /** @test */
    function it_can_add_an_employee()
    {
        $business = factory(Business::class)->create();
        $user = factory(User::class)->create();

        $business->addEmployee($user);

        $foundEmployee = Employee::where('business_id', $business->id)
            ->where('user_id', $user->id)
            ->exists();
        $this->assertTrue($foundEmployee);
    }

    /** @test */
    function a_null_is_not_an_employee_in_a_business_with_employees()
    {
        $nullUser = null;
        $business = factory(Business::class)->create();
        $users = factory(User::class, 3)->create();
        foreach($users as $user)
        {
            $business->addEmployee($user);
        }

        $this->assertFalse($business->hasEmployee($nullUser));
    }

    /** @test */
    function a_user_is_not_an_employee()
    {
        $nonemployeeUser = factory(User::class)->create();
        $business = factory(Business::class)->create();
        $users = factory(User::class, 3)->create();
        foreach($users as $user)
        {
            $business->addEmployee($user);
        }

        $this->assertFalse($business->hasEmployee($nonemployeeUser));
    }

    /** @test */
    function a_user_is_an_employee()
    {
        $business = factory(Business::class)->create();
        $users = factory(User::class, 3)->create();
        foreach($users as $user)
        {
            $business->addEmployee($user);
        }

        $this->assertTrue($business->hasEmployee($users[0]));
    }
}
