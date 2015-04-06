<?php

use KKo\Cache\Cache;

/**
 *
 */
class CommonTests extends PHPUnit_Framework_TestCase {

    protected $cache;

    public function testData() {
        $this->cache->set('test', 1);
        $this->assertEquals(1, $this->cache->get('test'));

        $this->cache->delete('test');
        $this->assertNull($this->cache->get('test'));

        $inc = 'inc'.md5(time());

        $this->cache->set($inc, 0);
        $this->assertEquals(0, $this->cache->get($inc));

        $this->cache->inc($inc);
        $this->assertEquals(1, $this->cache->get($inc));

        $this->cache->dec($inc);
        $this->assertEquals(0, $this->cache->get($inc));

        $this->assertTrue($this->cache->flush());

        $this->assertTrue(is_array($this->cache->info()));

        unset($this->cache);
    }

    /**
     * @expectedException Exception
     */
    public function testIncUnset() {
        try {
            $this->cache->inc('unset'.md5(time()));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
