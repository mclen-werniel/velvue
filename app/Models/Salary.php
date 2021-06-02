<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $table = 'salaries';
    protected $attributes = [
        'id',
        'salary'
    ];

    public function position()
    {
        return $this->hasMany(Position::class, 'salary_positions', 'salary_id', 'position_id');
    }
}
