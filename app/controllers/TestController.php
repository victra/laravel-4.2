<?php

class TestController extends BaseController {

	public function link1()
	{
		return View::make('test.link1');
	}

	public function link2()
	{
		return View::make('test.link2');
	}

}