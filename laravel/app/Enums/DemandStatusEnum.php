<?php

namespace App\Enums;

enum DemandStatusEnum: string
{
    case Accepted = 'accepted';

    case Rejected = 'rejected';

    case Pending = 'pending';
}
