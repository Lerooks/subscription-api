<?php


namespace App\Tournament\Infrastructure\Persistence\Doctrine\Repository;


use App\Tournament\Domain\Entity\Subscription;
use App\Tournament\Domain\Exception\SubscriptionAlreadyCreatedException;
use App\Tournament\Domain\Repository\SubscriptionRepository;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;

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
     * @throws NonUniqueResultException
     */
    public function fromId(int $id): ?Subscription
    {
        return $this->entityManager
            ->createQueryBuilder()
            ->select('s')
            ->from('Tournament:Subscription', 's')
            ->where('s.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
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
     * @throws SubscriptionAlreadyCreatedException
     */
    public function save(Subscription $subscription): Subscription
    {
        try {
            $this->entityManager->persist($subscription);
            $this->entityManager->flush();
        } catch (UniqueConstraintViolationException $exception) {
            throw new SubscriptionAlreadyCreatedException();
        }

        return $subscription;
    }

    /**
     * @param Subscription $subscription
     * @return Subscription
     * @throws SubscriptionAlreadyCreatedException
     */
    public function update(Subscription $subscription): Subscription
    {
        try {
            $this->entityManager->flush();
        } catch (UniqueConstraintViolationException $exception) {
            throw new SubscriptionAlreadyCreatedException();
        }

        return $subscription;
    }

    /**
     * @param Subscription $subscription
     */
    public function delete(Subscription $subscription): void
    {
        // TODO: Implement delete() method.
    }
}