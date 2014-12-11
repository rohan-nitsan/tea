<?php
namespace OliverKlee\Tea\Tests;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Test case.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class TeaTypeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \OliverKlee\Tea\Domain\Model\TeaType
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = new \OliverKlee\Tea\Domain\Model\TeaType();
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 * @return void
	 */
	public function getTitleInitiallyReturnsEmptyString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 * @return void
	 */
	public function setTitleSetsTitle() {
		$this->subject->setTitle('foo bar');

		$this->assertSame(
			'foo bar',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 * @return void
	 */
	public function getCaffeinatedInitiallyReturnsFalse() {
		$this->assertSame(
			FALSE,
			$this->subject->getCaffeinated()
		);
	}

	/**
	 * @test
	 * @return void
	 */
	public function setCaffeinatedSetsCaffeinated() {
		$this->subject->setCaffeinated(TRUE);
		$this->assertSame(
			TRUE,
			$this->subject->getCaffeinated()
		);
	}
}