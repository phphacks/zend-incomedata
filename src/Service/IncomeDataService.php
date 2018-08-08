<?php

namespace Zend\IncomeData\Service;

use Zend\IncomeData\Common\IncomeDataAdapterInterface;
use Zend\IncomeData\Exceptions\InvalidIncomeIdException;

/**
 * Class IncomeDataService
 * @package Zend\IncomeData\Service
 */
class IncomeDataService
{

    /**
     * @var IncomeDataAdapterInterface
     */
    private $incomeDataAdapter;

    /**
     * IncomeDataService constructor.
     * @param IncomeDataAdapterInterface $incomeDataAdapter
     */
    public function __construct(IncomeDataAdapterInterface $incomeDataAdapter)
    {
        $this->incomeDataAdapter = $incomeDataAdapter;
    }

    /**
     * @param string $incomeId
     * @return \Zend\IncomeData\Common\IncomeDataResult
     * @throws InvalidIncomeIdException
     */
    public function getIncomeData(string $incomeId)
    {
        $this->validateIncomeId($incomeId);

        return $this->incomeDataAdapter->getIncomeData($incomeId);
    }

    /**
     * @param string $incomeId
     * @throws InvalidIncomeIdException
     */
    private function validateIncomeId(string $incomeId)
    {
        if (empty($incomeId)){
            throw new InvalidIncomeIdException('Invalid income Id.');
        }
    }
}