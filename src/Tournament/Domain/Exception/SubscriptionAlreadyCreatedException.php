<?php


namespace App\Tournament\Domain\Exception;


use Exception;
use Throwable;

/**
 * Class SubscriptionAlreadyCreatedException
 * @package App\Tournament\Domain\Exception
 */
class SubscriptionAlreadyCreatedException extends Exception
{

    /**
     * SubscriptionAlreadyCreatedException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Subscription already created.", $code = 409, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}