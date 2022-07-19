<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logg extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'type',
        'title',
        'target_id',
        'content'
    ];

    /**
     * get user the verification belongs to
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
