<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $table = 'contact_info';

    public $timestamps = false;
    // because your table does not have created_at / updated_at

    protected $fillable = [
        'address',
        'email',
        'phone_1',
        'phone_2',
        'working_hours',
    ];
}
