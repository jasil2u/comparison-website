<?php
App::uses('AppModel', 'Model');
/**
 * MobileDetail Model
 *
 * @property MobileBrand $MobileBrand
 * @property Specification $Specification
 * @property Specification $Specification
 * @property StoreDetail $StoreDetail
 * @property UserReview $UserReview
 */
class MobileDetail extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mobile_brand_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'model' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MobileBrand' => array(
			'className' => 'MobileBrand',
			'foreignKey' => 'mobile_brand_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasOne = array(
		'Specification' => array(
			'className' => 'Specification',
			'foreignKey' => 'mobile_detail_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		/*'StoreDetail' => array(
			'className' => 'StoreDetail',
			'foreignKey' => 'mobile_detail_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),*/
		
	);
	
	public $hasMany = array(
		
		'UserReview' => array(
			'className' => 'UserReview',
			'foreignKey' => 'mobile_detail_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		
		'StoreDetail' => array(
			'className' => 'StoreDetail',
			'foreignKey' => 'mobile_detail_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);

}
