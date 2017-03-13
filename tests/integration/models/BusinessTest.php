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
    function it_can_tell_if_a_user_is_an_owner()
    {
       $user = factory(User::class, 2)->create();
       $business = factory(Business::class)->create(['owner_id' => $user[0]->id]);

       $this->assertFalse($business->isOwner($user[1]));
       $this->assertTrue($business->isOwner($user[0]));

       $this->actingAs($user[1]);
       $this->assertFalse($business->isOwner());

       $this->actingAs($user[0]);
       $this->assertTrue($business->isOwner());
    }

    /** @test */
    function it_cannot_add_an_employee_if_user_is_not_the_owner()
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
    function it_can_add_an_employee_if_the_user_is_the_owner()
    {

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
        [$business, $users] = $this->createBusinessWithEmployees();

        $this->assertFalse($business->hasEmployee($nonemployeeUser));
    }

    /** @test */
    function a_user_is_an_employee()
    {
        [$business, $users] = $this->createBusinessWithEmployees();

        $this->assertTrue($business->hasEmployee($users[0]));
    }

    /** @test */
    function it_can_list_employees()
    {
        [$business, $users] = $this->createBusinessWithEmployees();

        DB::enableQueryLog();
        $listOfEmployees = $business->listEmployees();
        $this->assertEquals($users->count(), $listOfEmployees->count());

        $employee1 = Employee::where('user_id', $users[0]->id)
            ->where('business_id', $business->id)
            ->first();

        $this->assertTrue($listOfEmployees->contains($employee1));

        $listOfUsers = $listOfEmployees->map(function($employee, $key) {
            return $employee->user;
        });

        $this->assertTrue($listOfUsers->contains($users[0]));
        dd(DB::getQueryLog());
    }

    protected function createBusinessWithEmployees()
    {
        $business = factory(Business::class)->create();
        $users = factory(User::class, 3)->create();
        foreach($users as $user)
        {
            $business->addEmployee($user);
        }
        return [$business, $users];
    }
}
