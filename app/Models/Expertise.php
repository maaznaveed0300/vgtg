<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;
    protected $table ='expertises';
    public function artist_expertise()
    {
        return $this->belongsToMany(Artist_Expertise::class);
    }
}
