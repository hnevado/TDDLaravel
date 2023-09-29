<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{

    public function test_age(): void
    {

        $user = new User;
        $user->age = 11;

        $this->assertEquals('Menor de edad', $user->age);


    }

    public function test_name_lowercase(): void
    {

        $user = new User;

        $user->name="Hector";

        $this->assertEquals('hector', $user->name);

    }

    public function test_lastname_lowercase(): void 
    {

        $user = new User;

        $user->lastname="Nevado";

        $this->assertEquals('nevado', $user->lastname);

    }

    public function test_fullname_uppercase():void 
    {
        $user = new User;

        $user->name="Hector";
        $user->lastname="Nevado";

        $this->assertEquals('HECTOR NEVADO',$user->fullname);
    }

    
}
