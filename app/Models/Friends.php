<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'no_tlp', 'alamat', 'group', 'masuk_grup'];

    public function groups()
    {
        return $this->belongsTo('App\Models\Groups');
    }

}
