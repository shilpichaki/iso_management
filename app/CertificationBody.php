<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificationBody extends Model
{
    protected $fillable = [
        'accreditation', 'certification_body_name'
    ];
}
