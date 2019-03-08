<?php

namespace Tests\Feature;

use App\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewProfilesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guests_can_view_profiles()
    {
        $this->withoutExceptionHandling();
        $profile = factory(Profile::class)->create();

        $this->get('profiles')
            ->assertSee($profile->user->email)
            ->assertSee($profile->first_name)
            ->assertSee($profile->bio)
            ->assertSee($profile->last_name)
            ->assertSee($profile->academic_level)
            ->assertSee($profile->caste)
            ->assertSee($profile->emoployed);
    }
}
