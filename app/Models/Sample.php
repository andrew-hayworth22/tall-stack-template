<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sample_type_id'
    ];

    public function sampleType() {
        $this->belongsTo(SampleType::class);
    }
}
