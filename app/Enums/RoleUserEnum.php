<?php

namespace App\Enums;

enum RoleUserEnum: string
{
    case ROLE_ADMIN = 'administrator';

    case ROLE_PREMIUM = 'premium';

    case ROLE_BASIC = 'basic';
}
