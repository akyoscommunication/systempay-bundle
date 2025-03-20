<?php

namespace Akyos\SystempayBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 */
#[ORM\Entity]
#[ORM\Table(name: 'systempay_transaction')]
class Transaction
{
    /**
     * @var
     */
    #[ORM\Column(name: 'id', type: 'integer')]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private $id;

    /**
     * @var string
     */
    #[ORM\Column(name: 'status_code', type: 'string', length: 255, nullable: true)]
    private $status;

    /**
     * @var int
     */
    #[ORM\Column(name: 'amount', type: 'integer')]
    private $amount;

    /**
     * @var int
     */
    #[ORM\Column(name: 'currency', type: 'integer')]
    private $currency;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: 'created_at', type: 'datetime')]
    private $createdAt;

    /**
     * @var DateTime
     */
    #[ORM\Column(name: 'updated_at', type: 'datetime')]
    private $updatedAt;

    /**
     * @var string
     */
    #[ORM\Column(name: 'log_response', type: 'text', nullable: true)]
    private $logResponse;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'paid', type: 'boolean')]
    private $paid;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'refunded', type: 'boolean')]
    private $refunded;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param int $currency
     */
    public function setCurrency($currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId(mixed $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLogResponse()
    {
        return $this->logResponse;
    }

    /**
     * @param string $logResponse
     */
    public function setLogResponse($logResponse): void
    {
        $this->logResponse = $logResponse;
    }

    /**
     * @return boolean
     */
    public function isPaid()
    {
        return $this->paid;
    }

    /**
     * @param boolean $paid
     */
    public function setPaid($paid): void
    {
        $this->paid = $paid;
    }

    /**
     * @return boolean
     */
    public function isRefunded()
    {
        return $this->refunded;
    }

    /**
     * @param boolean $refunded
     */
    public function setRefunded($refunded): void
    {
        $this->refunded = $refunded;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }



}
