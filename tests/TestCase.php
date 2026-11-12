<?php

declare(strict_types=1);

namespace Lines\Auth\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Lines\Auth\Infrastructure\Models\User;
use Orchestra\Testbench\Concerns\WithWorkbench;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase, WithWorkbench;

    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Name the module's auth model, as an app's config/auth.php does.
     *
     * @param  Application  $app
     */
    protected function defineEnvironment($app): void
    {
        $app['config']->set('auth.providers.users.model', User::class);
    }
}
