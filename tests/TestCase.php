<?php

namespace Jotform\Tests;

use Jotform\Jotform;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /** @var \JotForm */
    protected $jotform;

    protected function setUp(): void
    {
        parent::setUp();

        ini_set('error_reporting', 0);
        $this->jotform = new Jotform([
            'api_key' => getenv('JOTFORM_API_KEY'),
            'output'  => 'json',
            'debug'   => false
        ]);
    }
}
