<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // protected $fillable = ['title'];
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
