<?php
namespace Tests\Stripe;

use PHPUnit\Framework\TestCase;

class StripeAuthenticationTest extends TestCase
{
    public function testAuthentication()
    {
        $this->assertEquals(getenv('APP_NAME'), 'STRIPE_TEST');
    }
}
