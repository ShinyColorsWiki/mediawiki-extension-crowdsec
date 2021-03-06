<?php

/**
 * LAPIClient Decision Request Test.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

namespace MediaWiki\Extension\CrowdSec\Tests;

use MediaWiki\Extension\CrowdSec\LAPIClient;

/**
 * @coversDefaultClass \MediaWiki\Extension\CrowdSec
 */
class DecisionTest extends \MediaWikiIntegrationTestCase {
	/**
	 * @covers \MediaWiki\Extension\CrowdSec\LAPIClient
	 */
	public function testDecision() {
		$client = LAPIClient::singleton();
		$this->assertSame( "ban", $client->getDecision( "127.0.0.1" ) );
		$this->assertSame( "captcha", $client->getDecision( "127.0.0.2" ) );
		$this->assertSame( "ok", $client->getDecision( "127.0.0.3" ) );
	}
}
