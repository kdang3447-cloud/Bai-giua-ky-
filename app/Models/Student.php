<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'ma_sv',
        'ho_ten',
        'nam_sinh',
        'so_dt',
        'email',
        'dia_chi',
        'que_quan',
        'lop',
        'nganh',
        'khoa',
        'ghi_chu'
    ];

    protected $table = 'students';
    public $timestamps = false;
}
