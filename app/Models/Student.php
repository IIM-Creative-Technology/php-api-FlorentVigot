<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'firstname', 'age', 'year', 'classe_id'];
    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }
}
