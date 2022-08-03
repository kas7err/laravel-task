<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InquiryValidationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post('/contact', [
            "name" => "vJhon Dou",
            "phone" => "556151",
            "email" => "mail@abv.bg",
            "message" => "Lorem Ipsum",
        ]);

        $response->assertValid();
    }
}
