<?php


namespace App\Entity;

/**
 * @Entity @Table(name="registration")
 */
class Registration
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @Column(type="string")
     * @var string
     */
    private $registrationNumber;

    /**
     * @Column(type="integer")
     * @var int
     */
    private $department;

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
     * @return string
     */
    public function getRegistrationNumber(): string
    {
        return $this->registrationNumber;
    }

    /**
     * @param string $registrationNumber
     */
    public function setRegistrationNumber(string $registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
    }

    /**
     * @return int
     */
    public function getDepartment(): int
    {
        return $this->department;
    }

    /**
     * @param int $department
     */
    public function setDepartment(int $department)
    {
        $this->department = $department;
    }
}