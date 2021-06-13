<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class s_Case extends Model
{
    use HasFactory;
    public $table = 'cases';

    public $timestamps = false;

    protected $fillable = ['case_name', 'case_brand', 'case_inv_level', 'case_remarks', 'case_price', 'staff_id'];

    public function Staff()
    {
        return $this->belongsTo('staff');
    }
}
