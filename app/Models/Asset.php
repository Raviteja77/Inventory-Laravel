<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'value', 'purchased', 'person_id'];
    
    /**
     * Get the Person that owns the Asset.
     */
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
