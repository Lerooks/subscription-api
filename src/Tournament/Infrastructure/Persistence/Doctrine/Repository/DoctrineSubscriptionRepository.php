<?php


namespace App\Tournament\Infrastructure\Persistence\Doctrine\Repository;


use App\Tournament\Domain\Entity\Subscription;
use App\Tournament\Domain\Repository\SubscriptionRepository;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class DoctrineSubscriptionRepository
 * @package App\Tournament\Infrastructure\Persistence\Doctrine\Repository
 */
class DoctrineSubscriptionRepository implements SubscriptionRepository
{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * DoctrineSubscriptionRepository constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param int $id
     * @return Subscription|null
     */
    public function fromId(int $id): ?Subscription
    {
        // TODO: Implement fromId() method.
    }

    /**
     * @return Subscription[]
     */
    public function findAll(): array
    {
        return $this->entityManager
            ->createQueryBuilder()
            ->select('s')
            ->from('Tournament:Subscription', 's')
            ->getQuery()
            ->getResult();
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