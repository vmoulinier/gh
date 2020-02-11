<?php


namespace App\Model;

use App\Entity\Cars;
use App\Entity\Registration;
use Core\Services\Services;

class CarsRepository
{

    public $entityManager;

    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        $this->entityManager = new Services();
    }

    public function getAllCars()
    {
        return $this->entityManager->getDoctrine()->getRepository('App\Entity\Cars')->findBy([], ['id' => 'ASC']);
    }

    public function addCar()
    {
        $model = $this->entityManager->getDoctrine()->getRepository('App\Entity\Model')->find($_POST['model']);
        $registration = new Registration();
        $registration->setRegistrationNumber($_POST['registrationNumber']);
        $registration->setDepartment($_POST['department']);
        $car = new Cars();
        $car->setRegistration($registration);
        $car->setModel($model);
        $this->entityManager->getDoctrine()->persist($car);
        $this->entityManager->getDoctrine()->flush();
    }
}