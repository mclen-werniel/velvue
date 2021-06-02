<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeoLocation extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $attributes = [
        'id',
        'lat',
        'long',
        'employee_id',
    ];


    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
