<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function issues() {
        $this->hasMany(Issue::class);
    }

    public function users() {
        $this->belongsToMany(User::class);
    }
}
