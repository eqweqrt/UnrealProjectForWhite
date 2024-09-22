<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $role
 * @property string $status
 */
class Demand extends Model
{
    protected $fillable = [
        'user_id',
        'role',
        'status',
    ];
}
