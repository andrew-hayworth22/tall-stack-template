<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lookup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lookup_type_id'
    ];

    public function lookupType() {
        return $this->belongsTo(LookupType::class);
    }
}
