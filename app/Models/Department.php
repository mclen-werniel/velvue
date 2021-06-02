<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $attributes = [
        'id',
        'name',
    ];

    /**
     * Employees Rel
     *
     * @return void
     */
    public function employee()
    {
        return $this->hasOne(Employee::class, 'employee_departments', 'employee_id', 'department_id');
    }
}
