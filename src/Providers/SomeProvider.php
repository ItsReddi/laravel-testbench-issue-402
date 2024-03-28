<?php
namespace issue\ext\testbench\Providers;

use ErrorException;
use Illuminate\Auth\GenericUser;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Cache;

class SomeProvider implements UserProvider
{
    public function __construct(
        protected string $authenticatable,
    ) {
    }

    public function retrieveById($identifier)
    {
        throw new ErrorException('retrieveById');
    }

    public function retrieveByToken($identifier, $token)
    {
        throw new ErrorException('retrieveByToken');
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        throw new ErrorException('updateRememberToken');
    }

    public function retrieveByCredentials(array $credentials)
    {
        $value = Cache::remember('cacheKey', 300, fn () => 'value');
        return null;
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        throw new ErrorException('updateRememberToken');
    }

    /**
     * Create a new instance of the model.
     *
     * @return GenericUser
     */
    public function createModel(array $attributes)
    {
        throw new ErrorException('updateRememberToken');
    }

    /**
     * Rehash the user's password if required and supported.
     *
     * @param Authenticatable $user
     * @param array $credentials
     * @param bool $force
     * @return void
     */
    function rehashPasswordIfRequired(Authenticatable $user, array $credentials, bool $force = false)
    {
        throw new ErrorException('updateRememberToken');
    }
}
