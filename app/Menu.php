<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'name' => 'required|max: 30',
        'year' => 'required',
        'shot' => 'required|max: 50',
        'comment' => 'required|max: 1000',
        'profile_img' => 'image|file',
    ];
}
