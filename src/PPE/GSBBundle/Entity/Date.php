<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Date
 *
 * @ORM\Table(name="DATE")
 * @ORM\Entity
 */
class Date
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="JJMMAAAA", type="datetime")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jjmmaaaa;



    /**
     * Get jjmmaaaa
     *
     * @return \DateTime 
     */
    public function getJjmmaaaa()
    {
        return $this->jjmmaaaa;
    }
}
