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
     * @ORM\OneToOne(targetEntity="Location")
     */
    private $location;
    /**
     * @ORM\OneToMany(targetEntity="Resident", mappedBy="forestId")
     */
    private $residents;

    /**
     * @ORM\ManyToMany(targetEntity="TreeSpecies", inversedBy="forest")
     * @ORM\JoinTable(name="forest_tree_species")
     */
    private $tree_species;
    /**
     * @ORM\OneToOne(targetEntity="Woodman",mappedBy="woodman")
     */
    private $woodman;

    public function __construct()
    {
        $this->residents = new ArrayCollection();
    }
}
