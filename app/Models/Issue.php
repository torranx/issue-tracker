<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_user_id');
    }
    
    public function assigned() {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }
}
