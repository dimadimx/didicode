<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View3d extends Model
{
    use HasFactory;

    /**
     * @inheritdoc
     */
    protected $table = 'view_3d';

    /**
     * @inheritdoc
     */
    public $timestamps = false;

    /**
     * @inheritdoc
     */
    protected $fillable = [
        'date',
        'playerid',
        'agentid',
        'currency',
        'bet',
        'win',
        'rake',
        'tournament',
        'net',
        'fin',
        'aams_ticket',
        'aams_table',
    ];
}
