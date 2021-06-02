<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'positions';
    protected $attributes = [
        'id',
        'name'
    ];

    protected $with = ['salary'];

    public function employee()
    {
        return $this->hasMany(Employee::class, 'employee_positions', 'employee_id', 'position_id');
    }

    public function salary()
    {
        return $this->belongsToMany(Salary::class, 'salary_positions', 'salary_id', 'position_id');
    }
}
