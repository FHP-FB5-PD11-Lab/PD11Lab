<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Version; // Import the Version model

class VersionTest extends TestCase
{
    /**
     * A basic unit test for testing getVersionNumber().
     */
    public function test_combine_main_minor_and_build_into_version_number()
    {
        $version = new Version;
        $version->main        = 1;
        $version->minor_patch = 2.3;
        $version->build       = 4;

        $this->assertSame('1.2.3.4', $version->getVersionNumber());
    }
}
