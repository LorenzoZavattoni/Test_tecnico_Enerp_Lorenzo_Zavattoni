<?php

namespace App\Models;

use App\Models\Person;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable=[
        'nameE',
        'dateE'
    ];

    public function people(): HasMany
    {
        return $this->hasMany(Person::class);
    }
}