<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'code_id',
        'title',
        'html',
        'css',
        'js',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}