<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [ 'projektName', 'fields_id' ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function field()
    {
        return $this->belongsTo(Field::class, 'field_id', 'id');
    }

    public function userProjects()
    {
        return $this->hasMany(Task::class);
    }

}
