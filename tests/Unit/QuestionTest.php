<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class QuestionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('POST', '/', [
            'name' => 'Amir Kheirabadi',
            'email' => 'amirkheirabadi.com@gmail.com',
            'mobile' => '31....',
            'text' => 'Sample Question',
        ]);

        $response->assertStatus(200);
    }
}
