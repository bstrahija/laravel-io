<?php

class Admin_Topics_Controller extends Admin_Controller
{

	public function get_index()
	{
		$topics = Topic::all();
	}

}
