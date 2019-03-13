<?php

namespace Tests\Unit;

use App\Profile;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function profiles_can_be_filtered_accordingly()
    {
        factory(Profile::class, 50)->create();

        $filteredProfiles = Profile::applyFilterFor('male')->get();

        $this->assertSame($filteredProfiles->gender, 'male');
    }
}
