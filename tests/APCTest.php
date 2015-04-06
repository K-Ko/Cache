<?php

use KKo\Cache\Cache;

require_once __DIR__.DIRECTORY_SEPARATOR.'CommonTests.php';

/**
 * @requires extension apc
 */
class APCTest extends CommonTests {

    public function setUp() {
        $this->cache = Cache::factory(NULL, 'APC');
        $this->assertInstanceOf('KKo\Cache\APC', $this->cache);
    }

}
