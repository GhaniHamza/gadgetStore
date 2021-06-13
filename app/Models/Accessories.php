<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['accessories_name', 'accessories_type', 'accessories_brand', 'accessories_remarks', 'accessories_price', 'staff_id'];

    public function Staff()
    {
        return $this->belongsTo('staff');
    }
}
