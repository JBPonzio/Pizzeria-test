<?php

declare(strict_types = 1);

namespace App\Repository;

use App\Entity\Pizzeria;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class PizzeriaRepository
 */
class PizzeriaRepository extends ServiceEntityRepository
{
    /**
     * PizzeriaRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pizzeria::class);
    }

    /**
     * @return array
     */
    public function findAll(): array
    {
        // exécution de la requête
        return parent::findAll();
    }

    /**
     * @param int $pizzeriaId
     * @return Pizzeria
     */
    public function findCartePizzeria(int $pizzeriaId): Pizzeria
    {
        // test si l'id de la pizza est bien un nombre supérieur à 0
        if (!is_numeric($pizzeriaId) || $pizzeriaId <= 0) {
            throw new \Exception("Impossible de d'obtenir le détail de la pizza ({$pizzeriaId}).");
        }
        // création du query builder
        $qb = $this->createQueryBuilder("p");

        //Création du query
        $qb
            ->addSelect(['piz','qte','ing'])
            ->innerJoin('p.pizzas','piz')
            ->innerJoin('piz.quantiteIngredients','qte')
            ->innerJoin('qte.ingredient','ing')
            ->where("p.id = :idPizzeria")
            ->setParameter("idPizzeria", $pizzeriaId);

        //Execution du query
        return $qb->getQuery()->getSingleResult();



    }
}
