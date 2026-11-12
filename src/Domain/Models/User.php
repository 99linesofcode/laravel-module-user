<?php

declare(strict_types=1);

namespace Lines\Auth\Domain\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * A person known to the application. Authentication is layered on in
 * Infrastructure, so the domain user holds no credentials.
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string|null $locale
 */
class User extends Model
{
    use HasUuids;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'locale',
    ];
}
