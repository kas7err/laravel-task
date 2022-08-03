<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Mail\NewInquiry;

class InquiryMailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $inquiry = [
            "name" => "Mail Man",
            "phone" => "11111",
            "email" => "mail@mail.bg",
            "message" => "dug dug go",
        ];
        \Mail::fake();
        \Mail::send(new NewInquiry($inquiry));
        \Mail::assertSent(NewInquiry::class);

    }
}
