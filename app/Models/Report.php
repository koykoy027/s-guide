<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = "reports";
    protected $fillable = [
        // personal info
        "school_code",
        "report_id",
        "lastname",
        "firstname",
        "middlename",
        "gender",
        "birthday",
        "contact_number",
        // "email",

        // school info
        "student_number",

        "program",
        "year",
        "section",

        // case info
        "type_of_complain",
        "status",
        "place_of_incidence",
        "summary",
        "offender_lastname",
        "offender_firstname",
        "offender_program",
        "offender_year",
        "offender_section",
        "offender_gender",

    ];

    public function usersReport()
    {
        return $this->belongsTo(User::class, 'report_id', 'id');
    }
}
