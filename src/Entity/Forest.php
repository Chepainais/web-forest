<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ForestRepository")
 */
class Forest
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\OneToMany(targetEntity="Location",mappedBy="forest_id")
     */
    private $location;
    /**
     * @ORM\OneToMany(targetEntity="Resident",mappedBy="forest_id")
     */
    private $residents;

    /**
     * @ORM\ManyToMany(targetEntity="TreeSpecies", inversedBy="forest")
     * @ORM\JoinTable(name="forest_tree_species")
     */
    private $tree_species;
    /**
     * @ORM\OneToOne(targetEntity="Woodman",mappedBy="forest_id")
     */
    private $woodman;

    public function __construct()
    {
        $this->residents = new ArrayCollection();
    }

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
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location): void
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getResidents()
    {
        return $this->residents;
    }

    /**
     * @param mixed $residents
     */
    public function setResidents($residents): void
    {
        $this->residents = $residents;
    }

    /**
     * @return mixed
     */
    public function getTreeSpecies()
    {
        return $this->tree_species;
    }

    /**
     * @param mixed $tree_species
     */
    public function setTreeSpecies($tree_species): void
    {
        $this->tree_species = $tree_species;
    }

    /**
     * @return mixed
     */
    public function getWoodman()
    {
        return $this->woodman;
    }

    /**
     * @param mixed $woodman
     */
    public function setWoodman($woodman): void
    {
        $this->woodman = $woodman;
    }

}
