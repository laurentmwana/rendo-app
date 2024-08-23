<?php

namespace App\Enums;

enum RoleUserEnum: string
{
    case ROLE_ADMIN = 'administrator';

    case ROLE_SECRETARY = 'secretary';

    case ROLE_REQUESTER = 'requester';
}
