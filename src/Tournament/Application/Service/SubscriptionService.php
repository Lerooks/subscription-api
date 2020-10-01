<?php


namespace App\Tournament\Application\Service;


use App\Tournament\Domain\Entity\Subscription;
use App\Tournament\Domain\Repository\SubscriptionRepository;

/**
 * Class SubscriptionService
 * @package App\Tournament\Application\Service
 */
class SubscriptionService
{
    /**
     * @var SubscriptionRepository
     */
    private $subscriptionRepository;

    /**
     * SubscriptionService constructor.
     * @param SubscriptionRepository $subscriptionRepository
     */
    public function __construct(SubscriptionRepository $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }

    /**
     * @return Subscription[]
     */
    public function findAllSubscriptions()
    {
        return $this->subscriptionRepository->findAll();
    }
}