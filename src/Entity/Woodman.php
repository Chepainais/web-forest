<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WoodmanRepository")
 */
class Woodman
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\OneToOne(targetEntity="Forest",inversedBy="woodman")
     * @ORM\JoinColumn(name="forest_id", referencedColumnName="id")
     */
    private $forest_id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getForestId()
    {
        return $this->forest_id;
    }

    /**
     * @param mixed $forest_id
     */
    public function setForestId($forest_id): void
    {
        $this->forest_id = $forest_id;
    }

    /**
     * @return mixed
     */
    public function getForest()
    {
        return $this->forest;
    }

    /**
     * @param mixed $forest
     */
    public function setForest($forest): void
    {
        $this->forest = $forest;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

}
