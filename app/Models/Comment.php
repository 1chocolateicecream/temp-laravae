<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Eloquent {

    public $table = 'comments'; 
    public $fillable = ['content'];

}