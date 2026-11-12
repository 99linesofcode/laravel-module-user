<?php

declare(strict_types=1);

use Illuminate\Contracts\Auth\Authenticatable;
use Lines\Auth\Domain\Models\User;
use Lines\Auth\Infrastructure\Models\User as AuthUser;

describe('the domain User', function () {
    it('knows nothing of authentication', function () {
        expect(is_a(User::class, Authenticatable::class, true))->toBeFalse();
    });

    it('is what the auth model builds on', function () {
        expect(is_a(AuthUser::class, User::class, true))->toBeTrue()
            ->and(is_a(AuthUser::class, Authenticatable::class, true))->toBeTrue();
    });
});
