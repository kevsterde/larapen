<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'code_id';
    protected $fillable =[
        'user_id',
        'code_id',
        'title',
        'htmlcode',
        'csscode',
        'jscode',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}