<?php


namespace App\Entity;

/**
 * @Entity @Table(name="model")
 */
class Model
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @GeneratedValue @Column(type="string")
     * @var string
     */
    private $name;

    /**
     *
     * @ManyToOne(targetEntity="Brand", inversedBy="model", cascade={"persist", "merge"})
     * @JoinColumn(name="brand_id", referencedColumnName="id")
     */
    private $brand;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

}