<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineReport extends Model
{
    use HasFactory;
    protected $table = 'online_reports';
    protected $fillable=[
            'complainant',
            'name_of_complainant',
            // personal information
            'lastname',
            'firstname',
            'middlename',
            'gender',
            'birthday',
            'contact_number',
            'email',

            // school information
            'student_number',
            'school',
            'program',
            'year',
            'section',

            // case information
            'type_of_complain',
            'place_of_incidence',
            'summary',
    ];

}
