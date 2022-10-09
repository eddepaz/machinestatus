<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status', 'limitation'
    ];
    // protected $fillable = [
    //     'linde1',
    //     'linde2',
    //     'linde3',
    //     'linde4',
    //     'linde5',
    //     'linde6',
    //     'linde7',
    //     'terex4',
    //     'terex5',
    //     'terex6',
    //     'terex7',
    //     'ts7',
    //     'tfg',
    //     'tfp3',
    //     'tftdb',
    // ];
}
