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
        static::created(function ($Inquiry) {
            \Mail::to('fakemail@abv.bg')->send(new \App\Mail\NewInquiry($Inquiry));
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
