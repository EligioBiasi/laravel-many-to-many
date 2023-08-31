<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'type_id',
    ];


    public function Type(){
        return $this->belongsTo(Type::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
