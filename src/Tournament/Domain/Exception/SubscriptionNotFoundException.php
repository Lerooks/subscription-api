<?php


namespace App\Tournament\Domain\Exception;


use Exception;
use Throwable;

/**
 * Class SubscriptionNotFoundException
 * @package App\Tournament\Domain\Exception
 */
class SubscriptionNotFoundException extends Exception
{
    /**
     * SubscriptionNotFoundException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Subscription not found", $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}