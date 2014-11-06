<?php

namespace Tee\News\Tests;

use Tee\System\Tests\TestCase;

class InitializeTest extends TestCase {

    public function testSomethingIsTrue()
    {
        $this->assertTrue(\moduleEnabled('news'));
        $this->assertTrue(\moduleEnabled('page'));
        $this->assertTrue(\moduleEnabled('system'));
    }

}