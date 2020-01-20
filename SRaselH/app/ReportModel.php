<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportModel extends Model
{
    protected $fillable = [
        'rstudent_id', 'rtitle', 'rcontent','rfile',
    ];
}
