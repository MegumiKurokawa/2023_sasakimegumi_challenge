<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $rtable = 'contacts';

    protected $fillable = [
        'managements_id',
        'postcode',
        'address',
        'building',
    ];

    public function management()
    {
        return $this->belongsTo(Management::class);
    }
}
