<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\EmployeeFactory;

class employee extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
        'employee_id',
    ];

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'birthdate',
        'employee_id'
    ];

    protected static function newFactory(): Factory {
        return EmployeeFactory::new();
    }

    public function supervisor()
    {
        return $this->belongsTo(employee::class);
    }

    public function colaboradores()
    {
        return $this->hasMany(employee::class);
    }

}
