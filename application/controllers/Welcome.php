<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	public function index()
	{
        $this->data['pagetitle'] = "Diner Back-End";
		$this->data['content'] = "Daisy, Daisy, Give me your answer do....";
		$this->render();
	}

}
