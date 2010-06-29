<?php
class Campaign extends AppModel {
	var $name = 'Campaign';
	
	var $actsAs = array(
	    'Containable',
        'MeioUpload.MeioUpload' => array(
            'image' => array(
                "thumbsizes" => array(
                    "icon" => array("width" => 40, "height" => 40),
                    "small" => array("width" => 100),
                    "medium" => array("width" => 200),
                    "large" => array("width" => 400)
                )
            )
        )
    );
	
	var $validate = array(
		'sponsor_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'image' => array(
		    'extension' => array(
    	        'rule' => array('extension', array('gif', 'jpeg', 'png', 'jpg')),
                'message' => 'Please supply a valid image.',
	    		'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'link' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Sponsor' => array(
			'className' => 'Sponsor',
			'foreignKey' => 'sponsor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
}
?>
