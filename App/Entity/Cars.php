<?php


namespace App\Entity;

/**
 * @Entity @Table(name="cars")
 */
class Cars
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    private $id;

    /**
     *
     * @ManyToOne(targetEntity="Registration", inversedBy="cars", cascade={"persist", "merge"})
     * @JoinColumn(name="registration_id", referencedColumnName="id")
     */
    private $registration;

    /**
     *
     * @ManyToOne(targetEntity="Model", inversedBy="cars", cascade={"persist", "merge"})
     * @JoinColumn(name="model_id", referencedColumnName="id")
     */
    private $model;

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
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * @param mixed $registration
     */
    public function setRegistration($registration)
    {
        $this->registration = $registration;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

}