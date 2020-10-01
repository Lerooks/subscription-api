<?php


namespace App\Tournament\Application\Service;


use App\Tournament\Application\Command\UpdateSubscriptionCommand;
use App\Tournament\Domain\Entity\Subscription;
use App\Tournament\Domain\Exception\SubscriptionAlreadyCreatedException;
use App\Tournament\Domain\Exception\SubscriptionNotFoundException;
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

    /**
     * @param UpdateSubscriptionCommand $command
     * @return Subscription
     */
    public function createSubscription(UpdateSubscriptionCommand $command)
    {
        $subscription = new Subscription(null, $command->getName(), $command->getCpf(), $command->getPhone(), $command->getEmail(), $command->getFavoritePokemon(), $command->getNote());

        return $this->subscriptionRepository->save($subscription);
    }

    /**
     * @param UpdateSubscriptionCommand $command
     * @return Subscription
     * @throws SubscriptionNotFoundException
     */
    public function updateSubscription(UpdateSubscriptionCommand $command)
    {
        $subscription = $this->subscriptionRepository->fromId($command->getId());

        if (is_null($subscription)) {
            throw new SubscriptionNotFoundException();
        }

        $subscription->setName($command->getName());
        $subscription->setCpf($command->getCpf());
        $subscription->setPhone($command->getPhone());
        $subscription->setEmail($command->getEmail());
        $subscription->setFavoritePokemon($command->getFavoritePokemon());
        $subscription->setNote($command->getNote());

        return $this->subscriptionRepository->update($subscription);
    }

    /**
     * @param int $id
     * @return Subscription|null
     * @throws SubscriptionNotFoundException
     */
    public function findSubscriptionById(int $id)
    {
        $subscription = $this->subscriptionRepository->fromId($id);

        if (is_null($subscription)) {
            throw new SubscriptionNotFoundException();
        }

        return $subscription;
    }
}