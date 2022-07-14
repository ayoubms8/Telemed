<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	    protected $fillable = ['photo','Full_Name' ,'date_of_birth','Adress','Phone_Number','Social_Account','Speciality','Email_Adress','Gender'];

    use HasFactory;
}
