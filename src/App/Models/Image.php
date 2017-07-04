<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $attributes = ['title'];

    public function run() {
        return 1 + 1;
    }

}