<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Provider\es_ES\Text;
use Faker\Test\TestCase;

final class TextTest extends TestCase
{
    public function testText()
    {
        self::assertNotSame('', $this->faker->realtext(200, 2));
    }

    protected function getProviders(): iterable
    {
        yield new Text($this->faker);
    }
}
