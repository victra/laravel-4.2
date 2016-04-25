<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent{
	public function article() {
        return $this->hasMany('Article');
    }

    public function comments()
    {
    	return $this->morphMany('Comment', 'commentable');
    }
}