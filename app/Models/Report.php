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
        "report_id",
        "lastname",
        "firstname",
        "middlename",
        "gender",
        "birthday",
        "contact_number",

        // school info
        "student_number",
        "school",
        "program",
        "year",
        "section",

        // case info
        "type_of_complain",
        "status",
        "place_of_incidence",
        "summary",
    ];

    public function usersReport()
    {
        return $this->belongsTo(User::class, 'report_id', 'id');
    }
}
