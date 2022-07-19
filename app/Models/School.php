<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'seed',
        'pupils',
        'address',
        'town',
        'county',
        'postcode',
        'contact_name',
        'contact_email',
        'office_email',
        'telephone',
        'modeshift'
    ];

    /**
     * @return mixed users belonging to this school
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
