<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class TempRoute extends Model
{

    protected $table = 'temp';
    protected $fillable = [
        'cluster_id', 'longitude', 'latitude', 'unique_key', 'speed', 'accuracy', 'device_date'
    ];

}
