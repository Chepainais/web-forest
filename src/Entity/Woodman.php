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
     * @ORM\OneToOne(targetEntity="Forest", inversedBy="woodman")
     * @ORM\JoinColumn(name="forest_id", referencedColumnName="id")
     */
    private $forest;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\Column(type="integer")
     */
    private $age;
}
