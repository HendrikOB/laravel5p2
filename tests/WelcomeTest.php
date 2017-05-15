<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class WelcomeTest extends TestCase
{
    use DatabaseTransactions;

    function test_welcome_user()
    {

        $this->visit('/')
            ->seeElement('img', ['src' => 'http://laravel5/laravel_logo.png', 'alt']);
    }
}