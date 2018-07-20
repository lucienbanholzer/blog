<?php

namespace App\Repository;

use App\Entity\PracticalInfos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PracticalInfos|null find($id, $lockMode = null, $lockVersion = null)
 * @method PracticalInfos|null findOneBy(array $criteria, array $orderBy = null)
 * @method PracticalInfos[]    findAll()
 * @method PracticalInfos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PracticalInfosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PracticalInfos::class);
    }

//    /**
//     * @return PracticalInfos[] Returns an array of PracticalInfos objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PracticalInfos
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
