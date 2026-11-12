<?php

declare(strict_types=1);

use Lines\Auth\Infrastructure\Models\User;
use Lines\Support\Core\SharedKernel\DataTransferObjects\UserData;
use Lines\Support\Core\SharedKernel\Ports\UserDirectoryPort;
use Lines\Support\Core\SharedKernel\ValueObjects\UserId;

describe('UserDirectoryPort', function () {
    it('finds a known user\'s details', function () {
        $user = User::factory()->create([
            'name' => 'Ada Lovelace',
            'email' => 'ada@example.com',
            'locale' => 'nl',
        ]);

        $data = app(UserDirectoryPort::class)->find(new UserId($user->getKey()));

        expect($data)->toBeInstanceOf(UserData::class)
            ->and($data->id->equals(new UserId($user->getKey())))->toBeTrue()
            ->and($data->name)->toBe('Ada Lovelace')
            ->and($data->email)->toBe('ada@example.com')
            ->and($data->locale)->toBe('nl');
    });

    it('falls back to the app locale for a user without one', function () {
        config(['app.locale' => 'en']);
        $user = User::factory()->create(['locale' => null]);

        $data = app(UserDirectoryPort::class)->find(new UserId($user->getKey()));

        expect($data->locale)->toBe('en');
    });

    it('returns null for an unknown id', function () {
        $data = app(UserDirectoryPort::class)->find(new UserId('9b2f6d1e-3c4a-4f5b-8e7d-1a2b3c4d5e6f'));

        expect($data)->toBeNull();
    });
});
