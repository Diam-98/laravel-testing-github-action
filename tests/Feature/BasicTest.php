<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    // public function test_math_operation()
    // {
    //     $this->assertTrue(1 + 1 === 2);
    //     $this->assertEquals(2, 1 + 1);
    //     $this->assertSame(2, 1 + 1);

    //     $this->assertNotSame(3, 1 + 1);
    //     $this->assertEmpty([]); // '' [1, 3, 4] //true
    //     $this->assertNotEmpty([1, 2, 3]); //true
    //     $this->assertCount(3, [1, 2, 3]); //true
    // }

    // public function test_login_page_is_accessible(): void
    // {
    //     $response = $this->get('/dashboard');

    //     $response->assertStatus(302);
    // }

    // public function test_show_home_page()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    //     $response->assertViewIs('welcome');
    // }

    // public function test_show_login_page()
    // {
    //     $response = $this->get(route('login'));

    //     $response->assertStatus(200);
    //     $response->assertViewIs('auth.login');
    // }


    // public function test_user_creation()
    // {
    //     $user = User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@gmail.com',
    //         'password' => bcrypt('password'),
    //     ]);

    //     $this->assertDatabaseHas('users', ['name' => 'Test User']);
    // }

    public function test_user_cannot_accesss_profile()
    {
        $response = $this->get('/profile');
        $response->assertRedirect('/login');
    }
}
