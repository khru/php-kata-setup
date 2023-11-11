<?php
declare(strict_types=1);

namespace Tests;

use PhpKataSetup\ChangeMe;
use PHPUnit\Framework\TestCase;

class ChangeMeTest extends TestCase
{
    function testChangeMe() {
        $changeMe = new ChangeMe();
        self::assertSame(true, $changeMe->change());
    }
}
