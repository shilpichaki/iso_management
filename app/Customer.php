<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $fillable = [
        'cust_name',
        'cust_phone_number',
        'cust_email',
        'street_name',
        'pincode',
        'city',
        'state',
        'country',
        'contact_person_name',
        'contact_person_number',

    ];
}
