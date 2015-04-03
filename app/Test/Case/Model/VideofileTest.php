<?php
App::uses('Videofile', 'Model');

/**
 * Videofile Test Case
 *
 */
class VideofileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.videofile',
		'app.video'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Videofile = ClassRegistry::init('Videofile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Videofile);

		parent::tearDown();
	}

}
