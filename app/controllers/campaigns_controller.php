<?php
class CampaignsController extends AppController {

	var $name = 'Campaigns';

    public function beforeFilter() {
        parent::beforeFilter();
        
        $this->Auth->allow("display");
    }

    function display() {
        $this->Campaign->contain();
        
        $limit = 5;
        
        if(isset($this->params["named"]["limit"])) 
        {
            $limit = $this->params["named"]["limit"];
        }
        
        $size = "medium";
        
        if(isset($this->params["named"]["size"]))
        {
            $size = $this->params["named"]["size"];
        }
        
        
        $data = $this->Campaign->find('all', array(
            'order' => "RAND()",
            "limit" => $limit
        ));
        
        $campaigns = array();
        foreach($data as $row) 
        {
            $campaigns[] = $row["Campaign"];    
        }
        
        $this->set('campaigns', $campaigns);
        $this->set("size", $size);
    }

	function index() {
		$this->Campaign->recursive = 0;
		$this->set('campaigns', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid campaign', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('campaign', $this->Campaign->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Campaign->create();
			if ($this->Campaign->save($this->data)) {
				$this->Session->setFlash(__('The campaign has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campaign could not be saved. Please, try again.', true));
			}
		}
		$sponsors = $this->Campaign->Sponsor->find('list');
		$this->set(compact('sponsors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid campaign', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Campaign->save($this->data)) {
				$this->Session->setFlash(__('The campaign has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campaign could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Campaign->read(null, $id);
		}
		$sponsors = $this->Campaign->Sponsor->find('list');
		$this->set(compact('sponsors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for campaign', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Campaign->delete($id)) {
			$this->Session->setFlash(__('Campaign deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Campaign was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
