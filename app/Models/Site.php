<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $casts = ['siteInfo' => 'array'];

    public function customDomains()
    {
        return $this->hasMany(CustomDomain::class);
    }
}
