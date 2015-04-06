<?php

use KKo\Cache\Cache;

require_once __DIR__.DIRECTORY_SEPARATOR.'CommonTests.php';

/**
 *
 */
class MockTest extends CommonTests {

    public function setUp() {
        $this->cache = Cache::factory(NULL, 'Mock');
        $this->assertInstanceOf('KKo\Cache\Mock', $this->cache);
    }

}
