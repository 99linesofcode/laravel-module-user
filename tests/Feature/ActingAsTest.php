<?php

declare(strict_types=1);

use Illuminate\Support\Str;
use Lines\Auth\Infrastructure\Models\User;

it('reads the acting user\'s UUID back from auth()->id()', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    expect(auth()->id())->toBe($user->getKey())
        ->and(Str::isUuid(auth()->id()))->toBeTrue();
});

it('logs a user in by UUID through the auth model config names', function () {
    $user = User::factory()->create();

    auth()->loginUsingId($user->getKey());

    expect(auth()->user())->toBeInstanceOf(User::class)
        ->and(auth()->user()->is($user))->toBeTrue();
});
