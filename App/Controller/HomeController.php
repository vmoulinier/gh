<?php

namespace App\Controller;

use Core\Controller\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $brandRepo = $this->services->getRepository('brand');
        $modelRepo = $this->services->getRepository('model');
        $carRepo = $this->services->getRepository('cars');

        $brands = $brandRepo->getAllBrands();
        $models = $modelRepo->getAllModels();
        $cars = $carRepo->getAllCars();

        $this->template = 'dashboard';
        $this->render('home/index', compact('brands', 'models', 'cars'));
    }

    public function brand()
    {
        $brandRepo = $this->services->getRepository('brand');

        if (!empty($_POST)) {
            if(isset($_POST['save'])) {
                $brandRepo->addBrand();
                $this->addFlashBag('Marque enregistrée !', 'success');
            }
        }

        $brands = $brandRepo->getAllBrands();

        $this->template = 'dashboard';
        $this->render('home/brand', compact('brands'));
    }

    public function model()
    {
        $brandRepo = $this->services->getRepository('brand');
        $modelRepo = $this->services->getRepository('model');

        if (!empty($_POST)) {
            if(isset($_POST['save'])) {
                $modelRepo->addModel();
                $this->addFlashBag('Modèle enregistré !', 'success');
            }
        }

        $models = $modelRepo->getAllModels();
        $brands = $brandRepo->getAllBrands();

        $this->template = 'dashboard';
        $this->render('home/model', compact('brands', 'models'));
    }

    public function cars()
    {
        $modelRepo = $this->services->getRepository('model');
        $carRepo = $this->services->getRepository('cars');

        if (!empty($_POST)) {
            if(isset($_POST['save'])) {
                $carRepo->addCar();
                $this->addFlashBag('Voiture enregistrée !', 'success');
            }
        }

        $models = $modelRepo->getAllModels();
        $cars = $carRepo->getAllCars();

        $this->template = 'dashboard';
        $this->render('home/cars', compact('models', 'cars'));
    }

    public function revision()
    {
        $carRepo = $this->services->getRepository('cars');
        $revisionRepo = $this->services->getRepository('revision');

        if (!empty($_POST)) {
            if(isset($_POST['save'])) {
                $revisionRepo->addRevision();
                $this->addFlashBag('Révision enregistrée !', 'success');
            }
            if(!empty($_FILES)) {
                $data = $this->services->uploadFile('pdf');
                if ($data) {
                    $revisionRepo->addRevisionFile($data);
                }
            }
        }

        $cars = $carRepo->getAllCars();
        $comingRevisions = $revisionRepo->getAllComingRevisions();
        $revisionsFinished = $revisionRepo->getAllFinishedRevisions();

        $this->template = 'dashboard';
        $this->render('home/revision', compact('cars', 'comingRevisions', 'revisionsFinished'));
    }
}

