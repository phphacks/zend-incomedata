<?php

namespace Zend\IncomeData\Common;

/**
 * Class IncomeDataResult
 * @package Zend\IncomeData\Common
 */
class IncomeDataResult
{
    /**
     * @var string
     */
    private $incomeId;

    /**
     * @var \DateTime
     */
    private $initialDate;

    /**
     * @var \DateTime
     */
    private $cacheDate;

    /**
     * @var string
     */
    private $incomeOwnerName;

    /**
     * @var int
     */
    private $incomeTypeCode;

    /**
     * @var string
     */
    private $incomeTypeName;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var string
     */
    private $ownerSituation;

    /**
     * @var bool
     */
    private $hasLegalRepresentative;

    /**
     * @var bool
     */
    private $isAlimony;

    /**
     * @var bool
     */
    private $loanBlocked;

    /**
     * @var float
     */
    private $actualMarginValue;

    /**
     * @var \DateTime
     */
    private $currentCompetence;

    /**
     * @return string
     */
    public function getIncomeId(): string
    {
        return $this->incomeId;
    }

    /**
     * @param string $incomeId
     */
    public function setIncomeId(string $incomeId)
    {
        $this->incomeId = $incomeId;
    }

    /**
     * @return \DateTime
     */
    public function getInitialDate(): \DateTime
    {
        return $this->initialDate;
    }

    /**
     * @param \DateTime $initialDate
     */
    public function setInitialDate(\DateTime $initialDate)
    {
        $this->initialDate = $initialDate;
    }

    /**
     * @return \DateTime
     */
    public function getCacheDate(): \DateTime
    {
        return $this->cacheDate;
    }

    /**
     * @param \DateTime $cacheDate
     */
    public function setCacheDate(\DateTime $cacheDate)
    {
        $this->cacheDate = $cacheDate;
    }

    /**
     * @return string
     */
    public function getIncomeOwnerName(): string
    {
        return $this->incomeOwnerName;
    }

    /**
     * @param string $incomeOwnerName
     */
    public function setIncomeOwnerName(string $incomeOwnerName)
    {
        $this->incomeOwnerName = $incomeOwnerName;
    }

    /**
     * @return int
     */
    public function getIncomeTypeCode(): int
    {
        return $this->incomeTypeCode;
    }

    /**
     * @param int $incomeTypeCode
     */
    public function setIncomeTypeCode(int $incomeTypeCode)
    {
        $this->incomeTypeCode = $incomeTypeCode;
    }

    /**
     * @return string
     */
    public function getIncomeTypeName(): string
    {
        return $this->incomeTypeName;
    }

    /**
     * @param string $incomeTypeName
     */
    public function setIncomeTypeName(string $incomeTypeName)
    {
        $this->incomeTypeName = $incomeTypeName;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     */
    public function setPaymentMethod(string $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return string
     */
    public function getOwnerSituation(): string
    {
        return $this->ownerSituation;
    }

    /**
     * @param string $ownerSituation
     */
    public function setOwnerSituation(string $ownerSituation)
    {
        $this->ownerSituation = $ownerSituation;
    }

    /**
     * @return bool
     */
    public function isHasLegalRepresentative(): bool
    {
        return $this->hasLegalRepresentative;
    }

    /**
     * @param bool $hasLegalRepresentative
     */
    public function setHasLegalRepresentative(bool $hasLegalRepresentative)
    {
        $this->hasLegalRepresentative = $hasLegalRepresentative;
    }

    /**
     * @return bool
     */
    public function isAlimony(): bool
    {
        return $this->isAlimony;
    }

    /**
     * @param bool $isAlimony
     */
    public function setIsAlimony(bool $isAlimony)
    {
        $this->isAlimony = $isAlimony;
    }

    /**
     * @return bool
     */
    public function isLoanBlocked(): bool
    {
        return $this->loanBlocked;
    }

    /**
     * @param bool $loanBlocked
     */
    public function setLoanBlocked(bool $loanBlocked)
    {
        $this->loanBlocked = $loanBlocked;
    }

    /**
     * @return float
     */
    public function getActualMarginValue(): float
    {
        return $this->actualMarginValue;
    }

    /**
     * @param float $actualMarginValue
     */
    public function setActualMarginValue(float $actualMarginValue)
    {
        $this->actualMarginValue = $actualMarginValue;
    }

    /**
     * @return \DateTime
     */
    public function getCurrentCompetence(): \DateTime
    {
        return $this->currentCompetence;
    }

    /**
     * @param \DateTime $currentCompetence
     */
    public function setCurrentCompetence(\DateTime $currentCompetence)
    {
        $this->currentCompetence = $currentCompetence;
    }




//Base de cálculo da margem consignável
//Margem disponível para empréstimo
//Percentual disponível para empréstimo
//Margem disponível para cartão
//Percentual disponível para cartão
//Permite empréstimo

}