<?php

namespace Acme\GeekBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Continent
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\GeekBundle\Entity\ContinentRepository")
 */
class Continent
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
     * @ORM\Column(name="continent", type="string")
     * @ORM\OneToMany(targetEntity="Country", mappedBy="continent")
     */

    protected $continent;

    public function __construct()
    {
        $this->continent = new ArrayCollection();
    }

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
     * Set continent
     *
     * @param string $continent
     * @return Continent
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;
    
        return $this;
    }

    /**
     * Get continent
     *
     * @return string 
     */
    public function getContinent()
    {
        return $this->continent;
    }
}