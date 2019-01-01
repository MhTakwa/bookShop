<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdersRepository")
 */
class Orders
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string")
     */
    private $fullname;
    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string")
     */
    private $mail;
    /**
     * @var string
     *
     * @ORM\Column(name="postale", type="string")
     */
    private $postale;
    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=0)
     */
    private $total;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Orders
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    
    public function getTotal()
    {
        return $this->total;
    }


       public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

   
    public function getFullname()
    {
        return $this->fullname;
    }


      public function setPostale($postale)
    {
        $this->postale = $postale;

        return $this;
    }

   
    public function getPostale()
    {
        return $this->postale;
    }

      public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

   
    public function getMail()
    {
        return $this->mail;
    }
}

