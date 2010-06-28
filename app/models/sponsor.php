<?php
class Sponsor extends AppModel {
	var $name = 'Sponsor';
	var $displayField = "company_name";
	var $validate = array(
		'company_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You must supply a company name.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Campaign' => array(
			'className' => 'Campaign',
			'foreignKey' => 'sponsor_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>
