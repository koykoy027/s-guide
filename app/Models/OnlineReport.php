<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineReport extends Model
{
    use HasFactory;
    protected $table = 'online_reports';
    protected $fillable = [
        'school_code',
        'complainant',
        'name_of_complainant',
        'lastname',
        'firstname',
        'middlename',
        'gender',
        'birthday',
        'contact_number',
        'email',
        'student_number',
        'program',
        'year',
        'section',
        'type_of_complain',
        'place_of_incidence',
        'summary',
        "videos",
        "offender_lastname",
        "offender_firstname",
        "offender_program",
        "offender_year",
        "offender_section",
        "offender_gender",
    ];

    public function schools()
    {
        return $this->belongsTo(School::class, 'school_code', 'id');
    }
}
