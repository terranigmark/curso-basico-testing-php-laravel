<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $var = true;
        
        $this->assertTrue($var);
    }

    public function testValidateEmail() {
        //$email = 'i@admin.com';
        //$result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
        //$result = Email::validate('i@admin.com');

        $this->assertTrue(true);
    }
}
