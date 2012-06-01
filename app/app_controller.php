<?php

App::import('Vendor', 'facebook/facebook');
App::import('Lib', 'convenience_functions');

class AppController extends Controller {

	//var $components = array('Session', 'Security', 'RequestHandler', 'SwiftMailer');
	//var $helpers = array('Html', 'Form', 'Session', 'Ajax', 'Js' => array('Jquery'), 'Javascript', 'My');
	var $uses = array('User');

	function beforeFilter()
	{
		$this->setVars();
		$this->fbAuth();
	}
	
	function setVars()
	{
		$this->fbAppName = "";
		$this->fbAppId = "246697508767980";
		$this->fbAppSecret = "2b26fa6002cbd2e33c9c9fb5aaf1ff8b";
		$this->fbPermissions = "";
		$this->fbAppBaseUrl = 'http://google.com';
		$this->currentAction = $this->params['controller'].'/'.$this->params['action'];
		
		$this->set('fbAppId', $this->fbAppId);
	}

	function loadVars()
	{
		
	}
	
	function fbAuth()
	{
		$this->currentUser = null;
		
		$this->facebook = new Facebook(
			array(
				'appId'  => $this->fbAppId,
				'secret' => $this->fbAppSecret
			)
		);
		
		$fbUserId = $this->facebook->getUser();

		if ($fbUserId) 
		{	
			// get by fid
			$this->currentUser = $this->User->findByFid($fbUserId);
			
			if (empty($this->currentUser))
			{
				// get from fb
				try
				{
					$fbUser = $this->facebook->api('/me');
				} catch (FacebookApiException $e) 
				{
					pr($e);
					$this->log($e);
				}
				
				// prepare to save
				$user['User']['fid'] = $fbUserId;
				$user['User']['first_name'] = $fbUser['first_name'];
				$user['User']['last_name'] = $fbUser['last_name'];
				
				list($city, $country) = explode(",", $fbUser['hometown']['name']);
				
				$user['User']['nationality'] = $country;
				$user['User']['email'] = $fbUser['email'];
				$user['User']['gender'] = $fbUser['gender'];
				$user['User']['picture_url'] = 'http://graph.facebook.com/'.$fbUserId.'/picture?type=normal';
				$user['User']['registered'] = 0;
				
				// save
				$this->User->save($user);
				
				// read
				$this->currentUser = $this->User->read(null, $this->User->id);
			}
		}
		else
		{
			if ($this->currentAction != 'users/login')
			{
				$this->redirect(array('controller' => 'users', 'action' => 'login'));
			}
		}
		
		$this->set('currentUser', $this->currentUser);
	}
}

?>
