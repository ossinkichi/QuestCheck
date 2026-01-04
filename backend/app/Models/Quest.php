<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\VarDumper\Caster\Caster;

class Quest extends Model
{
    /** @use HasFactory<\Database\Factories\QuestFactory> */
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'title',
        'description',
        'limit_hours',
        'limit_date',
        'completed_at',
        'failed_at',
        'created_at'
    ];

    protected $hidden = [
        "updated_at"
    ];

    protected $casts = [
        'limit_date' => 'datetime',
        'completed_at' => 'datetime',
        'failed_at' => 'datetime',
        'created_at' => 'datetime',
    ];
}
