<?php
require_once 'Form.php';
require_once 'Submit.php';
require_once 'Input.php';

    class Hidden extends Input
    {
	    public function __construct()
		    {
			    $this->setAttr('type', 'hidden');
			    parent::__construct();
		    }
    }
?>