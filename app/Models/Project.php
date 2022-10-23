<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function issue() {
        $this->hasMany(Issue::class);
    }

    public function user() {
        $this->belongsToMany(User::class);
    }
}
