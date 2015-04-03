<?php
App::uses('Friendlist', 'Model');

/**
 * Friendlist Test Case
 *
 */
class FriendlistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.friendlist',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Friendlist = ClassRegistry::init('Friendlist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Friendlist);

		parent::tearDown();
	}

}
