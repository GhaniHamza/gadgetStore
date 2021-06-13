<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class s_powerbank extends Model
{
    public $table = 'powerbank';
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['powerbank_name', 'powerbank_brand', 'powerbank_mah_level', 'powerbank_remarks', 'powerbank_price', 'staff_id'];

    public function Staff()
    {
        return $this->belongsTo('staff');
    }
}
