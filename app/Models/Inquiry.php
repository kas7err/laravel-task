<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
        static::created(function ($inquery) {
            \Mail::to('fakemail@abv.bg')->send(new \App\Mail\NewInquery($inquery));
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
    ];
}
