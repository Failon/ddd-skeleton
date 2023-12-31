<?php

declare(strict_types=1);

namespace App\UserComponent\Domain\Exception;

class RevokedRefreshTokenException extends \Exception
{
    public const MESSAGE = 'Refresh token revoked';

    public function __construct()
    {
        parent::__construct(message: self::MESSAGE, code: 401);
    }
}