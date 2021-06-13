<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['staff_name'];

    public function accessories()
    {
        return $this->hasMany('accessories');
    }

    public function case()
    {
        return $this->hasMany('case');
    }

    public function powerbank()
    {
        return $this->hasMany('powerbank');
    }

    public function smartphone()
    {
        return $this->hasMany('smartphone');
    }
}
