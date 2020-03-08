<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use WithoutMiddleware,DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */

    // public function testBasicTest(){
    //     $this->assertTrue(true);
    // }

    public function testRegistrationFormTest()
    {
        $post_data = [
            'name' => 'PADC',
            'email' => 'padc@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];
        $response = $this->json('POST', '/register', $post_data);
        $response->assertStatus(201);

        $this->assertDatabaseHas('users',[
            'email' => 'padc@gmail.com'
        ]);
    }
}
