<?php

namespace Mollie\Payment\Test\Unit;

use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

class UnitTestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var ObjectManager
     */
    protected $objectManager;

    protected function setUp()
    {
        $this->objectManager = new ObjectManager($this);
    }

}