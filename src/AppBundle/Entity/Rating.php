<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RatingRepository")
 */
class Rating
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
      * @ORM\ManyToOne(targetEntity="Book")
      * @ORM\JoinColumn(nullable=false)
      */
     private $book;
    /**
     * @var string
     *
     * @ORM\Column(name="stars", type="decimal", precision=10, scale=0)
     */
    private $stars;
     /**
     * @var text
     *
     * @ORM\Column(name="review", type="text")
     */
    private $review;



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
     * Set stars
     *
     * @param string $stars
     *
     * @return Rating
     */
    public function setStars($stars)
    {
        $this->stars = $stars;

        return $this;
    }

    /**
     * Get stars
     *
     * @return string
     */
    public function getStars()
    {
        return $this->stars;
    }

     /**
     * Set review
     *
     * @param string $review
     *
     * @return Rating
     */
    public function setReview($review)
    {
        $this->review = $review;

        return $this;
    }

    /**
     * Get review
     *
     * @return string
     */
    public function getReview()
    {
        return $this->review;
    }
    /**
     * Set book
     *
     * @param \AppBundle\Entity\Book $book
     *
     * @return Rating
     */
    public function setBook(\AppBundle\Entity\Book $book)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return \AppBundle\Entity\Book
     */
    public function getBook()
    {
        return $this->book;
    }
}

