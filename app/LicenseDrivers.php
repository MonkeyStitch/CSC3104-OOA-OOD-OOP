<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicenseDrivers extends Model
{

    protected $table = 'license_drivers';

    protected $primaryKey = 'license_id';

    protected $fillable = [
        'user_id',
        'type',
        'category',
        'issue',
        'expiry'
    ];


}
