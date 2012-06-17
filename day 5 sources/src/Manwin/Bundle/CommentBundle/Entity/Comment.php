<?php

namespace Manwin\Bundle\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manwin\Bundle\CommentBundle\Entity\Comment
 *
 * @ORM\Table(name="manwin_comment")
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $author
     *
     * @ORM\Column(name="author", type="string", length=40)
     */
    private $author;

    /**
     * @var text $content
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var datetime $createdAd
     *
     * @ORM\Column(name="created_ad", type="datetime")
     */
    private $createdAd;

    public function __construct()
    {
    	$this->createdAd = new \DateTime();
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
     * Set author
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAd
     *
     * @param datetime $createdAd
     */
    public function setCreatedAd($createdAd)
    {
        $this->createdAd = $createdAd;
    }

    /**
     * Get createdAd
     *
     * @return datetime 
     */
    public function getCreatedAd()
    {
        return $this->createdAd;
    }
}