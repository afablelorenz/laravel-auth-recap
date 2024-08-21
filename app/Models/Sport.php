<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Sport extends Model
{
    use HasFactory;
    public function countries(){
        return $this->belongsToMany(Country::class);
    }
}
