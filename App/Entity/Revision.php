<?php


namespace App\Entity;

/**
 * @Entity @Table(name="revision")
 */
class Revision
{

    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @Column(type="datetime")
     */
    private $dateRevision;

    /**
     *
     * @ManyToOne(targetEntity="Cars", inversedBy="revision", cascade={"persist", "merge"})
     * @JoinColumn(name="car_id", referencedColumnName="id")
     */
    private $car;

    /**
     *
     * @ManyToOne(targetEntity="RevisionFiles", inversedBy="revisionfile", cascade={"persist", "merge"})
     * @JoinColumn(name="revisionfile_id", referencedColumnName="id")
     */
    private $revisionFile;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDateRevision()
    {
        return $this->dateRevision;
    }

    /**
     * @param mixed $dateRevision
     */
    public function setDateRevision($dateRevision)
    {
        $this->dateRevision = $dateRevision;
    }

    /**
     * @return mixed
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * @param mixed $car
     */
    public function setCar($car)
    {
        $this->car = $car;
    }

    /**
     * @return mixed
     */
    public function getRevisionFile()
    {
        return $this->revisionFile;
    }

    /**
     * @param mixed $revisionFile
     */
    public function setRevisionFile($revisionFile)
    {
        $this->revisionFile = $revisionFile;
    }
}