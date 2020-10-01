<?php


namespace App\Tournament\Domain\Repository;


use App\Tournament\Domain\Entity\Subscription;

/**
 * Interface SubscriptionRepository
 * @package App\Tournament\Domain\Repository
 */
interface SubscriptionRepository
{
    /**
     * @param int $id
     * @return Subscription|null
     */
    public function fromId(int $id): ?Subscription;

    /**
     * @return Subscription[]
     */
    public function findAll(): array;

    /**
     * @param Subscription $subscription
     * @return Subscription
     */
    public function save(Subscription $subscription): Subscription;

    /**
     * @param Subscription $subscription
     * @return Subscription
     */
    public function update(Subscription $subscription): Subscription;

    /**
     * @param Subscription $subscription
     * @return void
     */
    public function delete(Subscription $subscription): void;
}