<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trunks extends Model
{

    protected $table = 'trunks';

    protected $primaryKey = 'trunk_id';

    protected $fillable = [
        'trunk_name',
        'image',
        'category_trunk',
        'join_in',
        'freight_weight'
    ];

}
