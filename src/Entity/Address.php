<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="street", type="string")
     */
    private $street;

    /**
     * @var string
     * @ORM\Column(name="house_number", type="string", length=10)
     */
    private $houseNumber;

    /**
     * @var string
     * @ORM\Column(name="house_number_ext", type="string", nullable=true)
     */
    private $houseNumberExt;

    /**
     * @var string
     * @ORM\Column(name="zipcode", type="string")
     */
    private $zipcode;

    /**
     * @var string
     * @ORM\Column(name="city", type="string")
     */
    private $city;

    /**
     * @var string
     * @ORM\Column(name="province", type="string", nullable=true)
     */
    private $province;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="App\Entity\Country")
     */
    private $country;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Address
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
     * @return Address
     */
    public function setName(string $name): Address
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     * @return Address
     */
    public function setHouseNumber(string $houseNumber): Address
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumberExt(): ?string
    {
        return $this->houseNumberExt;
    }

    /**
     * @param string $houseNumberExt
     * @return Address
     */
    public function setHouseNumberExt(string $houseNumberExt): Address
    {
        $this->houseNumberExt = $houseNumberExt;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return Address
     */
    public function setZipcode(string $zipcode): Address
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return Address
     */
    public function setProvince(string $province): Address
    {
        $this->province = $province;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?Country
    {
        return $this->country;
    }

    /**
     * @param Country $country
     * @return Address
     */
    public function setCountry(Country $country): Address
    {
        $this->country = $country;

        return $this;
    }
}
