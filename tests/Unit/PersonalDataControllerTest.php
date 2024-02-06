<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\PersonalData;

class PersonalDataControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_method_returns_view()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('personal-data.index'));
        $response->assertViewIs('personal_data.index'); // Ensure the view name is correct
        $response->assertStatus(200);
    }


    // Add other test methods for create, show, edit, update, destroy, etc.
}
