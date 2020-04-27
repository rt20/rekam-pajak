<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pajak extends Model
{
    // protected $guarded = [];
    protected $fillable = ['tgl_perolehan', 'pemungut', 'perolehan', 'bruto', 'netto', 'pajak', 'user_id'];
    protected $casts = [
		'pajak' => 'array',	
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}