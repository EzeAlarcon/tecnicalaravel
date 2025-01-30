<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'completed'];

    // Scope para tareas completadas
    public function scopeCompleted($query)
    {
        return $query->where('completed', true);
    }
}
