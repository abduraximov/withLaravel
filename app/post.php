<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public $table = 'posts';
    public $filable = ['title' , 'shorttitle' , 'content'];
    
}
