<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LookupType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function lookups() {
        return $this->hasMany(Lookup::class);
    }
}
