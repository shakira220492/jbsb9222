<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city", indexes={@ORM\Index(name="country_id", columns={"country_id"})})
 * @ORM\Entity
 */
class City
{
    /**
     * @var string
     *
     * @ORM\Column(name="city_name", type="string", length=255, nullable=false)
     */
    private $cityName;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="country_id")
     * })
     */
    private $country;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="city_id")
     * })
     */
    private $city;



    /**
     * Set cityName
     *
     * @param string $cityName
     *
     * @return City
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Get cityName
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set country
     *
     * @param \HomeBundle\Entity\Country $country
     *
     * @return City
     */
    public function setCountry(\HomeBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \HomeBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param \HomeBundle\Entity\User $city
     *
     * @return City
     */
    public function setCity(\HomeBundle\Entity\User $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \HomeBundle\Entity\User
     */
    public function getCity()
    {
        return $this->city;
    }
}
