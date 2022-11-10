<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HelloTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;
    public function hellotest(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/');
        $response->assertOk();
    }

    public function testHello()
    {
        $this->assertTrue(true);

        $response = $this->get('/');
        $response->assertStatus(200);



        $response = $this->get('/hello');
        $response->assertStatus(302);


        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/hello');
        $response->assertStatus(404);


        $response = $this->get('/no_route');
        $response->assertStatus(404);


    }
}
