<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CountryRepository")
 */
class Country
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="iso2code", type="string", length=2)
     */
    private $iso2Code;

    /**
     * @var string
     * @ORM\Column(name="iso3code", type="string", length=3)
     */
    private $iso3Code;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Country
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Country
     */
    public function setName(string $name): Country
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getIso2Code(): ?string
    {
        return $this->iso2Code;
    }

    /**
     * @param string $iso2Code
     * @return Country
     */
    public function setIso2Code(string $iso2Code): Country
    {
        $this->iso2Code = $iso2Code;

        return $this;
    }

    /**
     * @return string
     */
    public function getIso3Code(): ?string
    {
        return $this->iso3Code;
    }

    /**
     * @param string $iso3Code
     * @return Country
     */
    public function setIso3Code(string $iso3Code): Country
    {
        $this->iso3Code = $iso3Code;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->getName();
    }
}
