<?php

namespace Atin\LaravelUserTypes\Enums;

enum UserType: string
{
    case Client = 'client';

    case Business = 'business';

    case Moderator = 'moderator';

    case Admin = 'admin';
}
