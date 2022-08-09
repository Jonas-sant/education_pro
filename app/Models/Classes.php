<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;


    protected $fillable=['title','link_class','teacher_name','workshop_id'];

    public function workshop(){
        return $this->belongsTo(Workshop::class);
    }
}
