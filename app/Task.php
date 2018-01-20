<?php

namespace App;

class Task extends Model
{
    public function scopeIncomplete($query) {
        return $query->where('completed', 0);
    }
}
