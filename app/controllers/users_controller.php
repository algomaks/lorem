<?php
class UsersController extends AppController {

	var $name = 'Users';
	
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$universities = $this->User->University->find('list');
		$nationalities = $this->User->Nationality->find('list');
		$languages = $this->User->Language->find('list');
		$this->set(compact('universities', 'nationalities', 'languages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$universities = $this->User->University->find('list');
		$nationalities = $this->User->Nationality->find('list');
		$languages = $this->User->Language->find('list');
		$this->set(compact('universities', 'nationalities', 'languages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function login()
	{
		if (!empty($this->currentUser))
		{
			if ($this->currentUser['User']['registred'])
			{
				//$this->redirect(array('action' => 'register', $this->currentUser['User']['id']));
			}
			else
			{
				$this->redirect(array('action' => 'register', $this->currentUser['User']['id']));
			}
		}
	}
	
	function register($id = null)
	{
		if (!$id && empty($this->data)) 
		{
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		
		if (!empty($this->data)) 
		{
			$this->data['User']['registered'] = 1;
			
			if ($this->User->save($this->data)) 
			{
				$this->Session->setFlash(__('The user has been saved', true));
				// TODO
				$this->redirect(array('action' => 'index'));
			} 
			else 
			{
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		
		if (empty($this->data)) 
		{
			$this->data = $this->User->read(null, $id);
		}
		
		$universities = $this->User->University->find('list');
		$nationalities = $this->User->Nationality->find('list');
		$languages = $this->User->Language->find('list');
		$this->set(compact('universities', 'nationalities', 'languages'));
	}
}
