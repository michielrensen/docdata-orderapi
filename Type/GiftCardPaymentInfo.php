<?php

namespace CL\DocData\Component\OrderApi\Type;

/**
 * @author Tijs Verkoyen <php-docdatapayments@verkoyen.eu>
 */
class GiftCardPaymentInfo extends AbstractObject
{
    /**
     * @var string
     */
    protected $giftCardNumber;

    /**
     * @var string
     */
    protected $balance;

    /**
     * @param string $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param string $giftCardNumber
     */
    public function setGiftCardNumber($giftCardNumber)
    {
        $this->giftCardNumber = $giftCardNumber;
    }

    /**
     * @return string
     */
    public function getGiftCardNumber()
    {
        return $this->giftCardNumber;
    }
}
