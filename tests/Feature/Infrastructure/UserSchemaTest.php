<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Lines\Auth\Infrastructure\Models\User;

describe('the module migrations', function () {
    it('create the users table with a UUID primary key', function () {
        expect(Schema::hasTable('users'))->toBeTrue()
            ->and(Schema::hasColumns('users', ['id', 'name', 'email', 'password', 'locale']))->toBeTrue()
            ->and(Schema::getColumnType('users', 'id'))->toBeIn(['uuid', 'char', 'varchar']);
    });

    it('create password_reset_tokens and sessions beside it', function () {
        expect(Schema::hasTable('password_reset_tokens'))->toBeTrue()
            ->and(Schema::hasTable('sessions'))->toBeTrue()
            ->and(Schema::getColumnType('sessions', 'user_id'))->not->toBe('integer');
    });
});

describe('the user factory', function () {
    it('makes users with UUID ids', function () {
        $user = User::factory()->create();

        expect(Str::isUuid($user->getKey()))->toBeTrue()
            ->and(User::find($user->getKey()))->not->toBeNull();
    });
});
