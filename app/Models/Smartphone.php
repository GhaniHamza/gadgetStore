<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['smartphone_name', 'smartphone_brand', 'smartphone_inv_level', 'smartphone_remarks', 'smartphone_price', 'staff_id'];

    public function Staff()
    {
        return $this->belongsTo('staff');
    }
}
