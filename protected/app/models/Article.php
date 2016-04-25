<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Article extends Eloquent 
{
    // table yang akan digunakan
    //public $table = 'articles';
 
    // mengambil data user dari model User
    // berdasarkan foreign key 'user_id'
    public function user() {
        return $this->belongsTo('User');
    }
}