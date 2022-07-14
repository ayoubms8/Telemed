<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
	  protected $fillable = [
        'name',
        'email',
        'number',
        'date',
        'message',
         'doctor',
       
    ];
    use HasFactory;
    use Notifiable;
}
