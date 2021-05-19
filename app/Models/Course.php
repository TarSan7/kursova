<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function advantages(){
        return $this->hasMany(Advantage::class);
    }

    public function schedules(){
        return $this->hasMany(Schedule::class);
    }
}
