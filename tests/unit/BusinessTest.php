<?php

namespace tests\unit;

use App\Business;
use App\Employee;
use App\User;

class BusinessTest extends \PHPUnit_Framework_TestCase
{
    protected $business;
    protected $owner;
    protected $employeeUser;
    protected $nonemployeeUser;
    protected $ownerEmployee;
    protected $otherEmployee;

    function setup()
    {
        $this->business = new Business();
        $this->business->name = "Dan's 12 Amazing Donkeys & Donuts";
        $this->business->id = 90;

        $this->owner = new User();
        $this->owner->id = 100;
        $this->business->owner_id = $this->owner->id;

        $this->employeeUser = new User();
        $this->employeeUser->id = 101;

        $this->nonemployeeUser = new User();
        $this->nonemployeeUser->id = 102;

        $this->ownerEmployee = new Employee();
        $this->ownerEmployee->business_id = $this->business->id;
        $this->ownerEmployee->user_id = $this->owner->id;

        $this->otherEmployee = new Employee();
        $this->otherEmployee->business_id = $this->business->id;
        $this->otherEmployee->user_id = $this->employeeUser->id;
    }

    /** @test */
    function a_business_has_a_slug()
    {
        $this->assertEquals('dans-12-amazing-donkeys-donuts', $this->business->slug());
    }

    function test_a_null_is_not_an_employee_in_a_business_with_no_employees()
    {
        $nullUser = null;
        $noEmployeesBusiness = new Business();
        $this->assertFalse($noEmployeesBusiness->hasEmployee($nullUser));
    }

    function test_a_null_is_not_an_employee_in_a_business_with_employees()
    {
        $nullUser = null;
        $this->assertFalse($this->business->hasEmployee($nullUser));
    }

    function test_a_user_is_not_an_employee()
    {
        $this->assertFalse($this->business->hasEmployee($this->nonemployeeUser));
    }

//    function test_a_user_is_an_employee()
//    {
//        $this->assertTrue($this->business->hasEmployee($this->employeeUser));
//    }
}
