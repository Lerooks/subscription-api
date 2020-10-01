<?php


namespace App\Tournament\Infrastructure\Persistence\Doctrine\Repository;


use App\Tournament\Domain\Entity\Subscription;
use App\Tournament\Domain\Repository\SubscriptionRepository;

/**
 * Class DoctrineSubscriptionRepository
 * @package App\Tournament\Infrastructure\Persistence\Doctrine\Repository
 */
class DoctrineSubscriptionRepository implements SubscriptionRepository
{

    /**
     * @param int $id
     * @return Subscription|null
     */
    public function fromId(int $id): ?Subscription
    {
        // TODO: Implement fromId() method.
    }

    /**
     * @return array
     */
    public function findAll(): array
    {
        // TODO: Implement findAll() method.
    }

    /**
     * @param Subscription $subscription
     * @return Subscription
     */
    public function save(Subscription $subscription): Subscription
    {
        // TODO: Implement save() method.
    }

    /**
     * @param Subscription $subscription
     * @return Subscription
     */
    public function update(Subscription $subscription): Subscription
    {
        // TODO: Implement update() method.
    }

    /**
     * @param Subscription $subscription
     */
    public function delete(Subscription $subscription): void
    {
        // TODO: Implement delete() method.
    }
}