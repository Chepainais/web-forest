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
     * @return \Forest
     */
    public function getForestId(): \Forest
    {
        return $this->forest_id;
    }

    /**
     * @param \Forest $forest_id
     */
    public function setForestId(\Forest $forest_id): void
    {
        $this->forest_id = $forest_id;
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
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param mixed $lat
     */
    public function setLat($lat): void
    {
        $this->lat = $lat;
    }

    /**
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param mixed $lng
     */
    public function setLng($lng): void
    {
        $this->lng = $lng;
    }

}
