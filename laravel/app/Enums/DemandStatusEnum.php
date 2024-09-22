<?php

namespace App\Enums;

enum DemandStatusEnum: string
{
    case Approved = 'approved';

    case Declined = 'declined';

    case Pending = 'pending';
}
