<?php

use KKo\Cache\Cache;

require_once __DIR__.DIRECTORY_SEPARATOR.'CommonTests.php';

/**
 *
 */
class FileTest extends CommonTests {

    public function setUp() {
        $this->cache = Cache::factory(NULL, 'File');
        $this->assertInstanceOf('KKo\Cache\File', $this->cache);
    }

}
