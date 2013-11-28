<?php

namespace Acme\GeekBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CountryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CountryRepository extends EntityRepository
{
    public function findOneByNameJoinedToCategory($id)
    {
        $query = $this->getEntityManager()
            ->createQuery('
            SELECT p, c FROM AcmeGeekBundle:Country p
            JOIN p.continent c
            WHERE p.continent = :id'
            )->setParameter('id', $id);

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}