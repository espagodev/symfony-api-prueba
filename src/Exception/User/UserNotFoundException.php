<?php

declare(strict_types=1);

namespace App\Exception\User;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserNotFoundException extends NotFoundHttpException
{
    private const MESSAGE = 'Usuario con correo electrónico %s no encontrado';

    public static function fromEmail(string $email): self
    {
        throw new self(\sprintf(self::MESSAGE, $email));
    }

    public static function fromUserIdAndToken(string $id, string $token): self
    {
        throw new self(\sprintf('Usuario con ID %s y token %s no encontrado', $id, $token));
    }

    public static function fromUserIdAndResetPasswordToken(string $id, string $resetPasswordToken): self
    {
        throw new self(\sprintf('Usuario con ID %s y resetPasswordToken %s no encontrado', $id, $resetPasswordToken));
    }

    public static function fromUserId(string $id): self
    {
        throw new self(\sprintf('Usuario con id %s no encontrado', $id));
    }
}
