<?php

namespace issue\ext\testbench\Tests\Providers;

use Illuminate\Auth\GenericUser;

use issue\ext\testbench\Providers\SomeProvider;
use issue\ext\testbench\Tests\TestCase;


class SomeProviderTest extends TestCase
{
    protected $someProvider;

    protected function setUp(): void
    {
        parent::setUp();
        $this->someProvider = new SomeProvider(GenericUser::class);
    }

    public function testRetrieveUserByCredentials()
    {

        $user = $this->someProvider->retrieveByCredentials([]);
        $this->assertNull($user);

    }
}
