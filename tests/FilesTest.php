<?php

use KKo\Cache\Cache;

require_once __DIR__.DIRECTORY_SEPARATOR.'CommonTests.php';

/**
 *
 */
class FilesTest extends CommonTests {

    public function setUp() {
        $this->cache = Cache::factory(NULL, 'Files');
        $this->assertInstanceOf('KKo\Cache\Files', $this->cache);
    }

}
