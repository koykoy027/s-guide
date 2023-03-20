<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Report;

class School extends Model
{
    use HasFactory;
    protected $table = 'schools';
    protected $fillable = [
        "name",
        "year_level",


    ];

    public function users()
    {
        return $this->hasMany(User::class, 'school_code', 'id');
    }
}
