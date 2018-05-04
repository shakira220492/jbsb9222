<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="video_id", columns={"video_id"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_content", type="text", length=65535, nullable=false)
     */
    private $commentContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="video_id", type="integer", nullable=false)
     */
    private $videoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_likes", type="integer", nullable=false)
     */
    private $commentLikes;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_dislikes", type="integer", nullable=false)
     */
    private $commentDislikes;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_creationDate", type="string", length=20, nullable=false)
     */
    private $commentCreationdate;



    /**
     * Get commentId
     *
     * @return integer
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Set commentContent
     *
     * @param string $commentContent
     *
     * @return Comment
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;

        return $this;
    }

    /**
     * Get commentContent
     *
     * @return string
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Comment
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set videoId
     *
     * @param integer $videoId
     *
     * @return Comment
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;

        return $this;
    }

    /**
     * Get videoId
     *
     * @return integer
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Set commentLikes
     *
     * @param integer $commentLikes
     *
     * @return Comment
     */
    public function setCommentLikes($commentLikes)
    {
        $this->commentLikes = $commentLikes;

        return $this;
    }

    /**
     * Get commentLikes
     *
     * @return integer
     */
    public function getCommentLikes()
    {
        return $this->commentLikes;
    }

    /**
     * Set commentDislikes
     *
     * @param integer $commentDislikes
     *
     * @return Comment
     */
    public function setCommentDislikes($commentDislikes)
    {
        $this->commentDislikes = $commentDislikes;

        return $this;
    }

    /**
     * Get commentDislikes
     *
     * @return integer
     */
    public function getCommentDislikes()
    {
        return $this->commentDislikes;
    }

    /**
     * Set commentCreationdate
     *
     * @param string $commentCreationdate
     *
     * @return Comment
     */
    public function setCommentCreationdate($commentCreationdate)
    {
        $this->commentCreationdate = $commentCreationdate;

        return $this;
    }

    /**
     * Get commentCreationdate
     *
     * @return string
     */
    public function getCommentCreationdate()
    {
        return $this->commentCreationdate;
    }
}
