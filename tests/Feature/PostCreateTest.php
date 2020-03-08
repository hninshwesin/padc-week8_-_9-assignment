<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PostCreateTest extends TestCase
{
    use WithoutMiddleware, DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreatPost()
    {
        $user = \App\User::first();
        $post = factory(\App\Post::class)->make(['author_id' => $user->id]);

        $response = $this->actingAs($user)->json('POST', '/post', $post->toArray());
        $response->dump();
        $response->assertStatus(302);

        $this->assertDatabaseHas('posts', $post->toArray());
    }
}
