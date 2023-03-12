<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'date_of_birth'];
    
    /**
     * Get the assets for the person.
     */
    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
