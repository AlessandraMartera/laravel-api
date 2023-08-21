<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "main_picture",
        "name",
        "agency",
        "decription",
        "publish_date",
        "completed",
        "type_id"
        ];

    public function type(){

        return $this->belongsTo(Type::class);
    }
    public function technologies(){

        return $this->belongsToMany(Technology::class);
    }

}