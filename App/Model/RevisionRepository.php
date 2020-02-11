<?php


namespace App\Model;

use App\Entity\Cars;
use App\Entity\Registration;
use App\Entity\Revision;
use App\Entity\RevisionFiles;
use Core\Services\Services;

class RevisionRepository
{

    public $entityManager;

    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        $this->entityManager = new Services();
    }

    public function getAllFinishedRevisions()
    {
        $sql = 'SELECT r FROM App\Entity\Revision r WHERE r.dateRevision < CURRENT_DATE()';

        return $this->entityManager
            ->getDoctrine()
            ->createQuery($sql)
            ->getResult();
    }

    public function getAllComingRevisions()
    {
        $sql = 'SELECT r FROM App\Entity\Revision r WHERE r.dateRevision > CURRENT_DATE()';

        return $this->entityManager
            ->getDoctrine()
            ->createQuery($sql)
            ->getResult();
    }

    public function addRevision()
    {
        $car = $this->entityManager->getDoctrine()->getRepository('App\Entity\Cars')->find($_POST['car']);
        $revision = new Revision();
        $revision->setCar($car);
        $revision->setDateRevision(new \DateTime($_POST['date']));
        $this->entityManager->getDoctrine()->persist($revision);
        $this->entityManager->getDoctrine()->flush();
    }

    public function addRevisionFile($data)
    {
        $revisionFile = new RevisionFiles();
        $revisionFile->setPath($data['name']);
        $revision = $this->entityManager->getDoctrine()->getRepository('App\Entity\Revision')->find($_POST['revision']);
        $revision->setRevisionFile($revisionFile);
        $this->entityManager->getDoctrine()->persist($revisionFile);
        $this->entityManager->getDoctrine()->flush();
    }
}