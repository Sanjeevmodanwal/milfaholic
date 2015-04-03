<?php
App::uses('AppModel', 'Model');
/**
 * Videofile Model
 *
 * @property Video $Video
 */
class Videofile extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Video' => array(
			'className' => 'Video',
			'foreignKey' => 'video_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
