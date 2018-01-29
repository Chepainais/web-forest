<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 */
class Location
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \Forest
     *
     * @ORM\ManyToOne(targetEntity="Forest", inversedBy="location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="forest_id", referencedColumnName="id")
     * })
     */
    private $forest_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $name;
    /**
     * @ORM\Column(type="decimal")
     */
    private $lat;
    /**
     * @ORM\Column(type="decimal")
     */
    private $lng;
}
