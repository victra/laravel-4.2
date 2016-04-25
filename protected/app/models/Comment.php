<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Comment extends Eloquent
{
	protected $table = 'comments';
	public function commentable()
	{
		return $this->morphTo();
	}
}