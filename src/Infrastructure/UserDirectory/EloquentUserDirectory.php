<?php

declare(strict_types=1);

namespace Lines\Auth\Infrastructure\UserDirectory;

use Lines\Auth\Domain\Models\User;
use Lines\Support\Core\SharedKernel\DataTransferObjects\UserData;
use Lines\Support\Core\SharedKernel\Ports\UserDirectoryPort;
use Lines\Support\Core\SharedKernel\ValueObjects\UserId;

final class EloquentUserDirectory implements UserDirectoryPort
{
    public function find(UserId $id): ?UserData
    {
        $user = User::query()->find((string) $id);

        if ($user === null) {
            return null;
        }

        return new UserData(
            id: $id,
            name: $user->name,
            email: $user->email,
            locale: $user->locale ?? config('app.locale'),
        );
    }
}
