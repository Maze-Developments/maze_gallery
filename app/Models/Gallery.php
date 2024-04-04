<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Gallery extends Model
{
    use Resizable;

    protected $fillable = [
        'owner',
        'message',
        'images',
    ];
}
