<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_should_be_true_when_email_is_valid()
    {
        $email = Validate::email('i@obsipay.com');
        $this->assertTrue($email);
    }

    public function test_should_be_false_when_email_is_valid()
    {
        $email = Validate::email('i@@obsipay.com');
        $this->assertFalse($email);
    }
}
