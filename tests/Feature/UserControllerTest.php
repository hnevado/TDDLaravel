<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{

    public function test_index(): void
    {
        $this->get('users')->assertViewHas('users'); //Que esta vista tenga un listado de usuarios que podamos visualizar
    }
}
