<?php
App::uses('Staticpage', 'Model');

/**
 * Staticpage Test Case
 *
 */
class StaticpageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.staticpage',
		'app.user',
		'app.plan',
		'app.favorite',
		'app.friendlist',
		'app.message'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Staticpage = ClassRegistry::init('Staticpage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Staticpage);

		parent::tearDown();
	}

}
