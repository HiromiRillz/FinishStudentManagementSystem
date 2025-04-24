<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'grade',    
        'address',
        'comment', 
        'img_path',
    ];

    public function grades(){
        return $this->hasOne('App\Models\Grade');
    }
}
