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

    public function test_should_be_false_when_email_is_not_valid()
    {
        $email = Validate::email('i@@obsipay.com');
        $this->assertFalse($email);
    }

    public function test_should_be_true_when_url_is_valid()
    {
        $url = Validate::url('https://pedro.capriles.io');
        $this->assertTrue($url);
    }

    public function test_should_be_false_when_url_is_not_valid()
    {
        $url = Validate::url('pedro.capriles.io');
        $this->assertFalse($url);
    }

    public function test_should_be_true_when_password_is_not_valid()
    {
        $password = Validate::password('123456');
        $this->assertTrue($password);
    }

    public function test_should_be_true_when_password_is_valid()
    {
        $password = Validate::password('123456deded');
        $this->assertFalse($password);
    }
}
