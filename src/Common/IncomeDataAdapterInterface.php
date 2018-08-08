<?php

namespace Zend\IncomeData\Common;

/**
 * Interface IncomeDataAdapterInterface
 * The application must implement this interface to do integration with any Income Data Service or API
 * @package Zend\IncomeData\Common
 */
interface IncomeDataAdapterInterface
{
    /**
     * @param string $incomeId
     * @return IncomeDataResult
     */
    public function getIncomeData(string $incomeId): IncomeDataResult;
}