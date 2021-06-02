<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $attributes = [
        'id',
        'fname',
        'lname',
        'address',
        'email_address',
        'sex'
    ];

    /**
     * Departments Rel
     *
     * @return Department::class
     */
    public function department()
    {
        return $this->belongsToMany(Department::class, 'employee_departments', 'employee_id', 'department_id');
    }

    public function position()
    {
        return $this->belongsToMany(Position::class, 'employee_positions', 'employee_id', 'position_id');
    }

    public function geoLocation()
    {
        return $this->hasOne(GeoLocation::class);
    }
}
