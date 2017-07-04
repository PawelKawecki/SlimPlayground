<?php

namespace Tests\Functional;

use App\Models\Image;

class NewTest extends BaseTestCase
{

    public function test_image_run_returns_2()
    {
        $image = new Image();

        $this->assertEquals(2, $image->run());
    }

}