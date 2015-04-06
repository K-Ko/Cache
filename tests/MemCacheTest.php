<?php

use KKo\Cache\Cache;

require_once __DIR__.DIRECTORY_SEPARATOR.'CommonTests.php';

/**
 * @requires extension memcache
 */
class MemCacheTest extends CommonTests {

    public function setUp() {
        $this->cache = Cache::factory(NULL, 'MemCache');
        $this->assertInstanceOf('KKo\Cache\MemCache', $this->cache);
    }

}
