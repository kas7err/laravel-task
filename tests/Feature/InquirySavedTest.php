<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InquirySavedTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_saved()
    {
        $this->post('/contact', [
            "name" => "Fredric VanHuben",
            "phone" => "532676",
            "email" => "another@abv.bg",
            "message" => "zumba Ipsumzumba Ipsum",
        ]);

        $this->assertDatabaseHas('inquiries', [
            "name" => "Fredric VanHuben",
            "phone" => "532676",
            "email" => "another@abv.bg",
            "message" => "zumba Ipsumzumba Ipsum",
        ]);
    }
}
