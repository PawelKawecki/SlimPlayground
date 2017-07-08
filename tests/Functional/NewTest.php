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

    public function test_add_image()
    {
        $imageSaved = Image::create(['title' => 'Image']);
        $imageReceived = Image::first();

        $this->assertEquals($imageSaved->title, $imageReceived->title);
    }
}