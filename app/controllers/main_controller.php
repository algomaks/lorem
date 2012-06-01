<?php
class MainController extends AppController {

	var $name = 'Main';
	var $uses = array();

	function index() 
	{
		
		
		
		//NEEDED VARS
		  $people = array(
		   		array(
		   			'first_name' => 'Christine',
		   			'last_name' => 'Gerpheide',
		   			'gender' => 'F',
		   			'nationality' => 'Mexico',
		   			'languages' => 'English',
		   			'interests' => 'Sailing, Climbing',
		   			'coordinates' => '51.439136,5.475483',
		   			'image' => 'http://images.paraorkut.com/img/clipart/images/s/sad_person-857.png',
		   			'connect_link' => 'aoeu',
		   		),
		   		array(
		   			'first_name' => 'Gerardo',
		   			'last_name' => 'Ochoa',
		   			'gender' => 'M',
		   			'nationality' => 'Mexico',
		   			'languages' => 'English',
		   			'interests' => 'Sailing, Climbing',
		   			'coordinates' => '51.441642,5.469722',
		   			'image' => 'http://images.paraorkut.com/img/clipart/images/s/sad_person-857.png',
		   			'connect_link' => 'aoeu',
		   		),
		   	);
		   	
		   	$this->set('people', $people);
		
	}
	
	function welcome()
	{
		
		
	}
}
