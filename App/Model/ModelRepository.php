<?php


namespace App\Model;

use App\Entity\Model;
use Core\Services\Services;

class ModelRepository
{

    public $entityManager;

    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        $this->entityManager = new Services();
    }

    public function getAllModels()
    {
        return $this->entityManager->getDoctrine()->getRepository('App\Entity\Model')->findBy([], ['name' => 'ASC']);
    }

    public function addModel()
    {
        $brand = $this->entityManager->getDoctrine()->getRepository('App\Entity\Brand')->find($_POST['brand']);
        $model = new Model();
        $model->setName($_POST['name']);
        $model->setBrand($brand);
        $this->entityManager->getDoctrine()->persist($model);
        $this->entityManager->getDoctrine()->flush();
    }

}