<?php

namespace Acme\GeekBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\GeekBundle\Entity\CountryRepository")
 */
class Country
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Continent", inversedBy="continent")
     * @ORM\JoinColumn(name="continent_id", referencedColumnName="id")
     */
    protected $continent;

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="string")
     */
    private $capital;
    /**
     * @var string
     *
     * @ORM\Column(name="president", type="string")
     */
    private $president;
    /**
     * @var integer
     *
     * @ORM\Column(name="population", type="integer")
     */
    private $population;
    /**
     * @var integer
     *
     * @ORM\Column(name="square", type="integer")
     */
    private $square;


    /**
     * @var string
     *
     * @ORM\Column(name="national_flag", type="string")
     */
    private $national_flag;
    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set capital
     *
     * @param string $capital
     * @return Country
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    
        return $this;
    }

    /**
     * Get capital
     *
     * @return string 
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set population
     *
     * @param integer $population
     * @return Country
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    
        return $this;
    }

    /**
     * Get population
     *
     * @return integer 
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Set square
     *
     * @param integer $square
     * @return Country
     */
    public function setSquare($square)
    {
        $this->square = $square;
    
        return $this;
    }

    /**
     * Get square
     *
     * @return integer 
     */
    public function getSquare()
    {
        return $this->square;
    }

    /**
     * Set national_flag
     *
     * @param string $nationalFlag
     * @return Country
     */
    public function setNationalFlag($nationalFlag)
    {
        $this->national_flag = $nationalFlag;
    
        return $this;
    }

    /**
     * Get national_flag
     *
     * @return string 
     */
    public function getNationalFlag()
    {
        return $this->national_flag;
    }

    /**
     * Set continent
     *
     * @param \Acme\GeekBundle\Entity\Continent $continent
     * @return Country
     */
    public function setContinent(\Acme\GeekBundle\Entity\Continent $continent = null)
    {
        $this->continent = $continent;
    
        return $this;
    }

    /**
     * Get continent
     *
     * @return \Acme\GeekBundle\Entity\Continent 
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * Set president
     *
     * @param string $president
     * @return Country
     */
    public function setPresident($president)
    {
        $this->president = $president;
    
        return $this;
    }

    /**
     * Get president
     *
     * @return string 
     */
    public function getPresident()
    {
        return $this->president;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Country
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}