<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Note extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [
        'user_id',
        'text',
        'status',
    ];

    public $sortable = [
        'status',
        'created_at'
    ];
}
