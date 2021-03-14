<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'participant_id',
        'classe_id',
    ];
    public function participant()
    {
        return $this->belongsTo('App\Participant');
    }
    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }
}
