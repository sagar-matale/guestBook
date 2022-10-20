<?php

namespace App\Repository;

use App\Entity\Guestbook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Guestbook>
 *
 * @method Guestbook|null find($id, $lockMode = null, $lockVersion = null)
 * @method Guestbook|null findOneBy(array $criteria, array $orderBy = null)
 * @method Guestbook[]    findAll()
 * @method Guestbook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GuestbookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Guestbook::class);
    }

    public function add(Guestbook $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Guestbook $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }	
		
	
	//GET ALL BOOKING LISTING
    public function getBookListing($value): array
    {
        if($value['session_user_type'] == 1) //show all guest record
        {
            $qry = $this->createQueryBuilder('g')
            ->andWhere('g.role = 2')
            ->andWhere('g.is_deleted = 0')
            ->orderBy('g.gb_id', 'DESC')
            ->getQuery()
            ->getResult();
        }
        else if($value['session_user_type'] == 2) //show all approve guest record + added by guest itself
        {
            $qry = $this->createQueryBuilder('g')
            ->andWhere('g.role = 2')
            ->andWhere('g.is_deleted = 0')
            ->andWhere(' (g.is_approved = 1 OR g.created_by = '.$value['session_user_id'].') ')
            ->orderBy('g.gb_id', 'DESC')
            ->getQuery()
            ->getResult();
        }
        return $qry;
    }
	
	//GET ADMIN DATA USING USERNAME AND PASSWORD
    public function checkAdminLogin($value): array
    {
        return 	$this->createQueryBuilder('g')
				->andWhere('g.role = 1')
				->andWhere('g.is_deleted = 0')
				->andWhere('g.is_approved = 1')
				->andWhere("g.name = '".$value['username']."'")
				->andWhere("g.password = '".$value['password']."'")
				->orderBy('g.gb_id', 'DESC')
				->getQuery()
				->getResult();
    }
	
	//GET ADMIN DATA USING ID
	public function getAdminUserDataById($value): array
    {
        return 	$this->createQueryBuilder('g')
				->andWhere('g.role = 1')
				->andWhere('g.is_deleted = 0')
				->andWhere('g.is_approved = 1')
				->andWhere("g.gb_id = '".$value['gb_id']."'")
				->orderBy('g.gb_id', 'DESC')
				->setMaxResults(1)
				->getQuery()
				->getResult();
    }

	//APPROVE GUEST USER BY ADMIN
    public function approveGuestByAdmin($value)
    {
        return 	$this->createQueryBuilder('u')
                ->update()
                ->set('u.is_approved', '1')
                ->set('u.updated_by', $value['session_user_id'])
                ->set('u.updated_on', "'".date("Y-m-d H:i:s")."'")
                ->where('u.gb_id = '.$value['gb_id'])
                ->getQuery()
                ->getResult();
	}

	//DELETE GUEST USER BY ADMIN
    public function deleteGuestByAdmin($value)
    {
        return 	$this->createQueryBuilder('u')
                ->update()
                ->set('u.is_deleted', '1')
                ->set('u.deleted_by', $value['session_user_id'])
                ->set('u.deleted_on', "'".date("Y-m-d H:i:s")."'")
                ->where('u.gb_id = '.$value['gb_id'])
                ->getQuery()
                ->getResult();        
    }
    

//    /**
//     * @return Guestbook[] Returns an array of Guestbook objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Guestbook
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
