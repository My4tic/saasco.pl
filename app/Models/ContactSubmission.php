<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = [
        'name',
        'email',
        'company',
        'phone',
        'budget',
        'message',
        'locale',
        'ip_address',
        'is_read',
        'archived_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'archived_at' => 'datetime',
        'is_read' => 'boolean',
    ];
}
