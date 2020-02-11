<?php


namespace App\Model;

use App\Entity\Brand;
use Core\Services\Services;

class BrandRepository
{

    public $entityManager;

    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        $this->entityManager = new Services();
    }

    public function getAllBrands()
    {
        return $this->entityManager->getDoctrine()->getRepository('App\Entity\Brand')->findBy([], ['name' => 'ASC']);
    }

    public function addBrand()
    {
        $brand = new Brand();
        $brand->setName($_POST['name']);
        $this->entityManager->getDoctrine()->persist($brand);
        $this->entityManager->getDoctrine()->flush();
    }

}