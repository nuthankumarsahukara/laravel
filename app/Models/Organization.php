<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $primarykey = "orgid";
    protected $fillable = [
        'orgname', 
        'auth_per_name',
        'auth_contact_number',
        'auth_email',
        'address',
        'city' ,
        'gst_number' ,
        'status',
];
    
}
