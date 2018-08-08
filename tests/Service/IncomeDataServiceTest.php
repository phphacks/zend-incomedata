<?php

namespace Zend\IncomeData\Tests;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Zend\IncomeData\Common\IncomeDataAdapterInterface;
use Zend\IncomeData\Common\IncomeDataResult;
use Zend\IncomeData\Exceptions\InvalidIncomeIdException;
use Zend\IncomeData\Service\IncomeDataService;

/**
 * Class IncomeDataServiceTest
 * @package Zend\IncomeData\Tests
 */
class IncomeDataServiceTest extends TestCase
{

    /**
     * @var MockObject
     */
    private $incomeDataAdapter;

    public function setUp()
    {
        parent::setUp();

        $this->incomeDataAdapter = $this->getMockBuilder(IncomeDataAdapterInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testWhenCallGetIncomeDataPassingInvalidIncomeIdTrowsInvalidIncomeIdException()
    {
        // arrange
        $this->incomeDataAdapter
            ->expects($this->never())
            ->method('getIncomeData')
            ->willReturn(new IncomeDataResult());

        $this->expectException(InvalidIncomeIdException::class);

        $incomeDataService = new IncomeDataService($this->incomeDataAdapter);

        // act
        $incomeDataService->getIncomeData('');

        // assert
    }

    public function testWhenCallGetIncomeDataPassingAValidId()
    {
        // arrange
        $this->incomeDataAdapter
            ->expects($this->once())
            ->method('getIncomeData')
            ->willReturn(new IncomeDataResult());

        $incomeDataService = new IncomeDataService($this->incomeDataAdapter);

        // act
        $result = $incomeDataService->getIncomeData('123456');

        // assert
        $this->assertNotNull($result);
        $this->assertInstanceOf(IncomeDataResult::class, $result);
    }
}